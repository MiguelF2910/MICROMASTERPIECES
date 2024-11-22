from meta_ai_api import MetaAI
import json

ai = MetaAI()
response = ai.prompt(message="¿Qué día es hoy en México?")

# Crear un diccionario con el mensaje y devolverlo como JSON
result = {
    "message": response.get('message', 'No se pudo obtener la respuesta')
}

# Imprimir el JSON para que PHP pueda capturarlo
print(json.dumps(result))