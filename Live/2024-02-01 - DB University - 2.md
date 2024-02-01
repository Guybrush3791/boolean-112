## DB
[[Database/2024-01-31 - DB University|DB University]]

## Todo
### Group by
1. Contare i corsi raggruppati per cfu
```sql
SELECT cfu, COUNT(*)
FROM courses
GROUP BY cfu;
```

2. Contare gli studenti raggruppati per anno di nascita
```sql
SELECT YEAR(date_of_birth), COUNT(*)
FROM students
GROUP BY YEAR(date_of_birth);
```

3. Selezionare il voto più basso dato ad ogni appello d'esame
```sql
SELECT exam_id, MIN(vote)
FROM exam_student
GROUP BY exam_id;
```

4. Contare gli appelli d'esame del mese di luglio raggruppati per giorno
```sql
SELECT DAY(date), COUNT(*)
FROM exams
WHERE MONTH(date) = 7
GROUP BY DAY(date);
```


### Join
1. Selezionare tutti i corsi del Corso di Laurea in Informatica (22)
```sql
SELECT courses.*
FROM degrees
    JOIN courses
        ON degrees.id = courses.degree_id
WHERE degrees.name LIKE 'Corso di Laurea in Informatica';
```

2. Selezionare le informazioni sul corso con id = 144, con tutti i relativi appelli d’esame
```sql
SELECT *
FROM courses
    JOIN exams
        ON courses.id = exams.course_id
WHERE courses.id = 144;
```

3. Selezionare a quale dipartimento appartiene il Corso di Laurea in Diritto dell'Economia (Dipartimento di Scienze politiche, giuridiche e studi internazionali)
```sql
SELECT departments.name 'department_name'
FROM degrees
    JOIN departments
        ON degrees.department_id = departments.id
WHERE degrees.name LIKE "Corso di Laurea in Diritto dell'Economia";
```

4. Selezionare tutti gli appelli d'esame del Corso di Laurea Magistrale in Fisica del primo anno
```sql
SELECT exams.*
FROM degrees
    JOIN courses
        ON degrees.id = courses.degree_id
    JOIN exams  
        ON courses.id = exams.course_id
WHERE degrees.name LIKE 'Corso di Laurea Magistrale in Fisica'
    AND courses.year = 1;
```

5. Selezionare tutti i docenti che insegnano nel Corso di Laurea in Lettere (21)
```sql
SELECT DISTINCT teachers.*
FROM degrees
    JOIN courses
        ON degrees.id = courses.degree_id
    JOIN course_teacher
        ON courses.id = course_teacher.course_id
    JOIN teachers
        ON course_teacher.teacher_id = teachers.id
WHERE degrees.name LIKE 'Corso di Laurea in Lettere';
```

6. Selezionare il libretto universitario di Mirco Messina (matricola n. 620320)
```sql
SELECT courses.name, exams.date, exams.hour, exam_student.vote
FROM students
    JOIN exam_student
        ON students.id = exam_student.student_id
    JOIN exams
        ON exam_student.exam_id = exams.id
    JOIN courses
        ON exams.course_id = courses.id
WHERE students.registration_number LIKE '620320';
```

7. Selezionare il voto medio di superamento d'esame per ogni corso, con anche i dati del corso di laurea associato, ordinati per media voto decrescente
```sql
SELECT courses.id, courses.name 'course_name', degrees.name 'degree_name', FLOOR(AVG(exam_student.vote)) 'avg_vote'
FROM courses
    JOIN exams
        ON courses.id = exams.course_id
    JOIN exam_student
        ON exams.id = exam_student.exam_id
    JOIN degrees
        ON courses.degree_id = degrees.id
WHERE vote >= 18
GROUP BY courses.id
ORDER BY avg_vote DESC;
```
