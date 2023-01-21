--email de users
drop index if exists tesla.emailx_user_email

CREATE INDEX emailx_user_email ON tesla.users(email);


--libelle des accessoires
drop index if exists tesla.libx_accessoires_lib;

CREATE INDEX libx_accessoires_lib ON tesla.accessoires(libelle);


--meilleure ventes des accessoires
drop index if exists tesla.mvx_accessoires_mv;

CREATE INDEX mvx_accessoires_mv ON tesla.accessoires(meilleure_vente);

