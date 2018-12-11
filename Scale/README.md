# Scale

## Dokumentation

**Inhaltsverzeichnis**

1. [Beschreibung](#1-beschreibung) 
2. [Systemanforderungen](#2-systemanforderungen)
3. [Installation](#3-installation)
4. [Changelog](#4-changelog)

## 1. Beschreibung

Diese Funktion skaliert einen Wert nach der Formel:

       (( InValue - InLL )                      ) 
 Out = (------------------- x ( OutUL - OutLL ) ) + OutLL 
       ( ( InUL - InLL )                        ) 

Parameter:

param[in] InValue Input value (to be scaled)
param[in] InLL Input lower limit
param[in] InUL Input upper limit
param[in] OutLL Output lower limit
param[in] OutUL Output upper limit
return ready scaled value

## 2. Systemanforderungen
- IP-Symcon ab Version 4.x

## 3. Installation
Über die Kern-Instanz "Module Control" folgende URL hinzufügen:

`https://github.com/IPSSchablone/SymconMath.git`

## 4. Changelog
Version 0.0.1:
  - Draft version
