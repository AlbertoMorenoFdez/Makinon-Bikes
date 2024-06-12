#!/bin/bash

# Nombre de la pila que se va a borrar
stack_name="LandingMBStack"

echo "Se va a borrar la pila " $stack_name

# Comprobamos que la pila existe antes de intentar borrarla
if aws cloudformation describe-stacks --stack-name $stack_name > /dev/null 2>&1; then

    # Comando para borrar la pila
    aws cloudformation delete-stack --stack-name $stack_name

    # Esperar hasta que la eliminación de la pila esté completa
    if aws cloudformation wait stack-delete-complete --stack-name $stack_name; then

        echo "La pila $stack_name ha sido eliminada correctamente."

    else
        echo "La eliminación de la pila $stack_name ha fallado."
        exit 1
    fi
else
    echo "La pila $stack_name no existe."
    exit 1
fi
