#!bin/bash
if [ $? -eq 0 ]; then
    aws cloudformation list-exports \
        --query "Exports[?Name=='NOMBRE PARAMETRO DE SALIDA'].Value"
fi