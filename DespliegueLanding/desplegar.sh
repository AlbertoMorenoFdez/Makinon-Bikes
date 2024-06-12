#!/bin/bash

# Nombre de la pila que se va a desplegar
stack_name="LandingMBStack"

echo "Desplegando la pila " $stack_name

# Comando para desplegar la pila
output=$(aws cloudformation deploy --stack-name $stack_name --template-file landing.yml --capabilities CAPABILITY_IAM 2>&1)

if [ $? -ne 0 ]; then
    if [[ $output == *"No changes to deploy. Stack"* ]]; then
        echo "La pila $stack_name ya está actualizada."
    else
        echo "El despliegue de la pila $stack_name ha fallado."
        echo $output
        exit 1
    fi
else
    echo "La pila $stack_name ha sido desplegada correctamente."
fi