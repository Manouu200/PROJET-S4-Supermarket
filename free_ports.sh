#!/bin/bash

PORTS=(8080 8081)

for port in "${PORTS[@]}"; do
    echo "🔎 Recherche processus sur le port $port..."

    PIDS=$(sudo lsof -t -i :$port)

    if [ -z "$PIDS" ]; then
        echo "✅ Aucun processus sur $port"
    else
        echo "💀 Processus trouvé sur $port : $PIDS"
        sudo kill -9 $PIDS
        echo "✔️ Tué avec succès"
    fi
done
