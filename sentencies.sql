create table actors
(
    id          int auto_increment
        primary key,
    name        varchar(255)                                        not null,
    birthday    date      default (cast(((12 - 8) - 1995) as date)) null,
    nationality text                                                null,
    created_at  timestamp default CURRENT_TIMESTAMP                 null,
    updated_at  timestamp default CURRENT_TIMESTAMP                 null on update CURRENT_TIMESTAMP
);

