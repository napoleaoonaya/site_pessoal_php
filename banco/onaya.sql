/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  napoleao kazu onaya
 * Created: 04/08/2018
 */

-- drop database onaya; 

create database onaya CHARSET = UTF8 COLLATE = utf8_general_ci;

use onaya;

create table servicos(
    idServico bigint not null auto_increment,
    nomeServico varchar(255) not null,
    precoServico double(10,2) not null,
    primary key(idServico)
)engine=InnoDB charset=utf8;

insert into servicos (nomeServico,precoServico) values ("Formatação,backup e instalação de sistema operacional",150.00);
insert into servicos (nomeServico,precoServico) values ("Formatação e instalação de sistema operacional sem backup",120.00);
insert into servicos (nomeServico,precoServico) values ("Remoção de vírus",50.00);
insert into servicos (nomeServico,precoServico) values ("Backup de dados mídia física pendrive",50.00);
insert into servicos (nomeServico,precoServico) values ("Backup de dados mídia física CD ou DVD",40.00);
insert into servicos (nomeServico,precoServico) values ("Backup de dados nuvem",60.00);
insert into servicos (nomeServico,precoServico) values ("Instalação de sistema operacional",100.00);
insert into servicos (nomeServico,precoServico) values ("Instalação de softwares",50.00);
insert into servicos (nomeServico,precoServico) values ("Instalação de hardware",50.00);
insert into servicos (nomeServico,precoServico) values ("Consultoria de TI hora",60.00);
insert into servicos (nomeServico,precoServico) values ("Serviços de webdesigner hora",60.00);
insert into servicos (nomeServico,precoServico) values ("Serviços de programação hora",60.00);
insert into servicos (nomeServico,precoServico) values ("Serviços de infra",260.00);
insert into servicos (nomeServico,precoServico) values ("Acesso remoto",50.00);
insert into servicos (nomeServico,precoServico) values ("Visita técnica",150.00);

select * from servicos order by nomeServico;



