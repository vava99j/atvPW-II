create database Agenda;
use Agenda;
create table tarefa(
	id_tabela int auto_increment primary key,
	id_tarefa int,
	descricao_tarefa varchar(100) not null,
    data_inicio_tarefa date,
    data_fim_tarefa  date);
    
    insert into tabela (descricao_tarefa, data_inicio_tarefa, data_fim_tarefa) values
('Tarefa 1: Estudar PHP', '2025-04-01', '2025-04-02'),
('Tarefa 2: Finalizar projeto', '2025-04-02', '2025-04-03'),
('Tarefa 3: Reunião com equipe', '2025-04-03', '2025-04-03'),
('Tarefa 4: Planejar apresentação', '2025-04-04', '2025-04-05'),
('Tarefa 5: Revisar código', '2025-04-05', '2025-04-06');