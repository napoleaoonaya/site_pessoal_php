@echo off

:A
@echo digite sua senha para executar o aplicativo

@echo.

set /p "senha=>"

if %senha% == admin goto :menu 
if %senha% != admin goto :fail

:menu

cls

goto menu


:fail

start exit



:menu

color 78

@echo ======================================================
@echo ==============Suporte tecnico onaya===================
@echo ======================================================
@echo ==============Acesso remoto Windows===================
@echo ======================================================
@echo ===============  0-Verifica ip   =====================
@echo ===============  1-Habilita acesso  ==================
@echo ===============  2-Acesso remoto =====================		
@echo ===============  3-Teamviewer    =====================
@echo ===============  4-Sair	         =====================
@echo ======================================================
@echo ======================================================
@echo ===============================================v1.0.0=
@echo.
@echo.

@echo Escolha: 
set /p op= 
if %op% equ 0 goto 0
if %op% equ 1 goto 1
if %op% equ 2 goto 2
if %op% equ 3 goto 3
if %op% equ 4 goto 4

:0

ipconfig
pause

cls

goto menu

:1

sysdm.cpl
pause

cls

goto menu



:2

start msra
cls

goto menu


:3

start C:\Windows\temp\
cls

:4

start exit
cls