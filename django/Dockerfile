FROM python:3.10.0
ENV PYTHONUNBUFFERED 1

# Arguments defined in docker-compose.yml
ARG user
ARG uid

ENV FOLDER=/webapp

RUN mkdir $FOLDER
WORKDIR $FOLDER
COPY requirements.txt $FOLDER/
RUN python -m pip install -r requirements.txt
COPY . $FOLDER/
