## DB
[[Database/2024-01-31 - DB University|DB University]]

## Todo
1. Selezionare tutti gli insegnanti
```sql
SELECT *
FROM teachers;
```

2. Selezionare tutti i referenti per ogni dipartimento
```sql
SELECT head_of_department
FROM departments;
```

3. Selezionare tutti gli studenti il cui nome inizia per "E" (373)
```sql
SELECT *
FROM students
WHERE name LIKE 'e%';
```

4. Selezionare tutti gli studenti che si sono iscritti nel 2021 (734)
```sql
-- VERSIONE 1
SELECT *
FROM students
WHERE enrolment_date >= '2021-01-01'
    AND enrolment_date < '2022-01-01';

-- VERSIONE 2
SELECT *
FROM students
WHERE enrolment_date BETWEEN '2021-01-01'
	AND '2022-01-01';

-- VERSIONE 3
SELECT *
FROM students
WHERE YEAR(enrolment_date) = 2021;
```

5. Selezionare tutti i corsi che non hanno un sito web (676)
```sql
SELECT *
FROM courses
WHERE website IS NULL;
```

6. Selezionare tutti gli insegnanti che hanno un numero di telefono (50)
```sql
SELECT *
FROM teachers
WHERE phone IS NOT NULL;
```

7. Selezionare tutti gli appelli d'esame dei mesi di giugno e luglio 2020 (2634)
```sql
SELECT *
FROM exams
WHERE YEAR(date) = 2020
    AND MONTH(date) BETWEEN 6 AND 7;
```

8. Qual è il numero totale degli studenti iscritti? (5000)
```sql
SELECT COUNT(*) 'student_count'
FROM students;
```
