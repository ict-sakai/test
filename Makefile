CC = gcc
CFLAGS = -Wall -O -lm
TARGET = main
SRCS = main.c
LDFLAGS = 
$(TARGET): $(SRCS)

clean:
	rm main 
