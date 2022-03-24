CREATE TABLE "public.users" (
	"id" serial NOT NULL,
	"username" serial(255) NOT NULL UNIQUE,
	"password" VARCHAR(255) NOT NULL,
	"email" serial(255) NOT NULL UNIQUE,
	"postal_code" VARCHAR(255),
	"created_at" TIMESTAMP NOT NULL,
	CONSTRAINT "users_pk" PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "public.adverts" (
	"id" serial NOT NULL,
	"user_id" VARCHAR(255) NOT NULL,
	"amount" FLOAT NOT NULL,
	"created_at" TIMESTAMP NOT NULL,
	CONSTRAINT "adverts_pk" PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "public.categories" (
	"id" serial NOT NULL,
	"name" VARCHAR(255) NOT NULL,
	CONSTRAINT "categories_pk" PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "public.messages" (
	"id" serial NOT NULL,
	"sender_id" integer NOT NULL,
	"recipient_id" integer NOT NULL,
	"content" TEXT NOT NULL,
	"sent_at" TIMESTAMP NOT NULL,
	CONSTRAINT "messages_pk" PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "public.biddings" (
	"id" serial NOT NULL,
	"user_id" integer NOT NULL,
	"amount" FLOAT NOT NULL,
	"created_at" TIMESTAMP NOT NULL,
	"advert_id" integer NOT NULL,
	CONSTRAINT "biddings_pk" PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "public.images" (
	"id" serial NOT NULL,
	"advert_id" integer NOT NULL,
	"path" VARCHAR(255) NOT NULL,
	CONSTRAINT "images_pk" PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);



CREATE TABLE "public.advert_category" (
	"id" serial NOT NULL,
	"advert_id" integer NOT NULL,
	"category_id" integer NOT NULL,
	CONSTRAINT "advert_category_pk" PRIMARY KEY ("id")
) WITH (
  OIDS=FALSE
);




ALTER TABLE "adverts" ADD CONSTRAINT "adverts_fk0" FOREIGN KEY ("user_id") REFERENCES "users"("id");


ALTER TABLE "messages" ADD CONSTRAINT "messages_fk0" FOREIGN KEY ("sender_id") REFERENCES "users"("id");
ALTER TABLE "messages" ADD CONSTRAINT "messages_fk1" FOREIGN KEY ("recipient_id") REFERENCES "users"("id");

ALTER TABLE "biddings" ADD CONSTRAINT "biddings_fk0" FOREIGN KEY ("user_id") REFERENCES "users"("id");
ALTER TABLE "biddings" ADD CONSTRAINT "biddings_fk1" FOREIGN KEY ("advert_id") REFERENCES "adverts"("id");

ALTER TABLE "images" ADD CONSTRAINT "images_fk0" FOREIGN KEY ("advert_id") REFERENCES "adverts"("id");

ALTER TABLE "advert_category" ADD CONSTRAINT "advert_category_fk0" FOREIGN KEY ("advert_id") REFERENCES "adverts"("id");
ALTER TABLE "advert_category" ADD CONSTRAINT "advert_category_fk1" FOREIGN KEY ("category_id") REFERENCES "categories"("id");








