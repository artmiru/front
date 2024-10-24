1. Таблица Studios (Студии)
- studio_id: уникальный идентификатор студии
- name: название студии
- location: местоположение студии

2. Таблица Teachers (Преподаватели)
- teacher_id: уникальный идентификатор преподавателя
- name: имя преподавателя
- specialization: специализация или предмет

3. Таблица Classes (Уроки)
- class_id: уникальный идентификатор урока
- studio_id: ссылка на таблицу Studios
- teacher_id: ссылка на таблицу Teachers
- start_time: время начала урока
- end_time: время окончания урока

4. Таблица Students (Ученики)
- student_id: уникальный идентификатор ученика
- name: имя ученика
- subscription_type: тип абонемента

5. Таблица Enrollments (Записи)
- enrollment_id: уникальный идентификатор записи
- student_id: ссылка на таблицу Students
- class_id: ссылка на таблицу Classes

6. Таблица Subscriptions (Абонементы)
- subscription_id: уникальный идентификатор абонемента
- type: тип абонемента (например, месячный, годовой)
- max_classes_per_period: максимальное количество занятий в периоде

Эта структура позволяет:
- Легко добавлять и изменять информацию о студиях и преподавателях.
- Управлять расписанием уроков с учетом времени и места.
- Записывать студентов на занятия в зависимости от их абонементов.

Для обеспечения целостности данных рекомендуется использование внешних ключей между связанными таблицами (studio_id,
teacher_id, и т.д.). Это облегчит управление данными и обеспечит правильные связи между сущностями.