## Todo
Imparare a modellizzare un'entità della realtà.
In questo esempio, modelliziamo una tabella per memorizzare le informazioni riguardanti i libri di una biblioteca.

## Tabella
| nome colonna | tipo di dato | attributi |
| ---- | ---- | ---- |
| id | INT | primary key, auto_increment |
| isbn | VARCHAR(13) | unique |
| author | VARCHAR(128) | nullable |
| page_count | INT | -- |
| title | VARCHAR(128) | -- |
| publish_date | DATE | nullable |
| n_copies | INT | default(0) |
| available | BOOLEAN | default(TRUE) |
| editor | VARCHAR(128) | nullable |
| rack_name | VARCHAR(64) | nullable |
| genre | VARCHAR(64) | -- |
| price | DECIMAL(6,2) | -- |
| discount | TINYINT | default(0) |
| weight | INT | default(0) |
| digital_weight | INT | default(0) |
| rating | TINYINT | default(0) |
| state | TINYINT | default(5) |
| format | VARCHAR(32) | -- |
| main_language | VARCHAR(3) | -- |
| cover | VARCHAR(128) | unique |
| edition | VARCHAR(32) | nullable |

