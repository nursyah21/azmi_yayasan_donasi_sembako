#!/bin/bash

TARGET="src"
RUN_CMD="php -S localhost:5000 src/index.php"
POLLING_INTERVAL=.1
RESTART_EVERY=10
PID=""

restart_command() {
  if [ -n "$PID" ]; then
    kill $PID 2>/dev/null
  fi

  bash -c "$RUN_CMD" &
  PID=$!
}

create_hash() {
  find "$TARGET" -exec md5sum {} + 2>/dev/null | awk '{print $1}' | sort | md5sum | awk '{print $1}'
}

last_hash=$(create_hash)
last_restart=$(date +%s)
restart_command

while true; do
  sleep $POLLING_INTERVAL
  
  current_time=$(date +%s)
  elapsed=$((current_time - last_restart))

 if [ "$elapsed" -ge "$RESTART_EVERY" ]; then
    echo "Restart server..."
    restart_command
    last_restart=$current_time
  fi

  current_hash=$(create_hash)
  if [ "$current_hash" != "$last_hash" ]; then
    echo "please wait..."
    restart_command
    last_hash=$current_hash
  fi
done