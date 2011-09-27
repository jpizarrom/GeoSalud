-- Parse::SQL::Dia          version 0.17                              
-- Documentation            http://search.cpan.org/dist/Parse-Dia-SQL/
-- Environment              Perl 5.012004, /usr/bin/perl              
-- Architecture             x86_64-linux-gnu-thread-multi             
-- Target Database          mysql-innodb                              
-- Input file               conceptos.dia                             
-- Generated at             Mon Sep 26 16:26:07 2011                  
-- Typemap for mysql-innodb not found in input file                   

-- get_constraints_drop 


-- get_permissions_drop 

-- get_view_drop

-- get_schema_drop
drop table if exists profesional;
drop table if exists especialidad;
drop table if exists convenio;
drop table if exists lugaratencion;
drop table if exists horarioatencion;
drop table if exists caracteristicalugar;
drop table if exists atencion;
drop table if exists accion;
drop table if exists facilidadpago;
drop table if exists profesional_especialidad;
drop table if exists lugar_caracteristica;
drop table if exists atencion_convenio;
drop table if exists lugar_facilidadpago;

-- get_smallpackage_pre_sql 

-- get_schema_create
create table profesional (
   id     int       auto_increment   not null,
   Nombre varchar(150)         ,
   constraint pk_profesional primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table especialidad (
   especialidadid int      auto_increment    not null,
   Nombre         varchar(150)         ,
   constraint pk_especialidad primary key (especialidadid)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table convenio (
   id        int     auto_increment     not null,
   Nombre    varchar(150)         ,
   Beneficio varchar(150)         ,
   Contacto  varchar(150)         ,
   constraint pk_convenio primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table lugaratencion (
   lugarid   int     auto_increment       not null,
   Nombre    varchar(150)           ,
   Direccion varchar(150)           ,
   Fono      varchar(150)           ,
   email     varchar(150)           ,
   lat       decimal(13,10)         ,
   lon       decimal(13,10)         ,
   constraint pk_lugaratencion primary key (lugarid)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table horarioatencion (
   id         int  auto_increment   not null,
   atencionid int             ,
   dia        tinyint         ,
   horainicio time            ,
   horafin    time            ,
   constraint pk_horarioatencion primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table caracteristicalugar (
   caracteristicaid int    auto_increment      not null,
   Nombre           varchar(150)         ,
   constraint pk_caracteristicalugar primary key (caracteristicaid)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table atencion (
   atencionid         int    auto_increment    not null,
   lugarid            int                ,
   profesionalid      int                ,
   evaluacioncosteada tinyint(1)         ,
   constraint pk_atencion primary key (atencionid)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table accion (
   id     int    auto_increment      not null,
   Nombre varchar(150)         ,
   constraint pk_accion primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table facilidadpago (
   id     int    auto_increment      not null,
   Nombre varchar(150)         ,
   constraint pk_facilidadpago primary key (id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table profesional_especialidad (
   id             int not null,
   especialidadid int not null,
   constraint pk_profesional_especialidad primary key (id,especialidadid)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table lugar_caracteristica (
   lugarid          int not null,
   caracteristicaid int not null,
   constraint pk_lugar_caracteristica primary key (lugarid,caracteristicaid)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table atencion_convenio (
   atencionid int not null,
   id         int not null,
   constraint pk_atencion_convenio primary key (atencionid,id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;
create table lugar_facilidadpago (
   lugarid int not null,
   id      int not null,
   constraint pk_lugar_facilidadpago primary key (lugarid,id)
)   ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- get_view_create

-- get_permissions_create

-- get_inserts

-- get_smallpackage_post_sql

-- get_associations_create
alter table profesional_especialidad add constraint prfsnl_spcld_fk_ProfesionalId 
    foreign key (id)
    references profesional (id) on delete cascade;
alter table profesional_especialidad add constraint prfsnl_spcld_fk_EspcldEspcld 
    foreign key (especialidadid)
    references especialidad (especialidadid) on delete cascade;
alter table lugar_caracteristica add constraint lgr_crctrstc_fk_LgrtncnLugarid 
    foreign key (lugarid)
    references lugaratencion (lugarid) on delete cascade;
alter table lugar_caracteristica add constraint kNsM1zj871VCEfFOXZ10yQ 
    foreign key (caracteristicaid)
    references caracteristicalugar (caracteristicaid) on delete cascade;
alter table atencion add constraint profesional_atencion 
    foreign key (profesionalid)
    references profesional (id) ;
alter table atencion add constraint atencion_lugar 
    foreign key (lugarid)
    references lugaratencion (lugarid) ;
alter table atencion_convenio add constraint atncn_cnvn_fk_AtncnAtencionid 
    foreign key (atencionid)
    references atencion (atencionid) on delete cascade;
alter table atencion_convenio add constraint atncn_cnvn_fk_ConvenioId 
    foreign key (id)
    references convenio (id) on delete cascade;
alter table horarioatencion add constraint atencion_horario 
    foreign key (atencionid)
    references atencion (atencionid) ;
alter table lugar_facilidadpago add constraint lgr_fcldpg_fk_LgrtncnLugarid 
    foreign key (lugarid)
    references lugaratencion (lugarid) on delete cascade;
alter table lugar_facilidadpago add constraint lgr_fcldpg_fk_FacilidadpagoId 
    foreign key (id)
    references facilidadpago (id) on delete cascade;
