import psycopg2 as pc
def redondeo(x):
    if(x == None):
        return 
    else:
        return round(x)
    
conexion = pc.connect(user="postgres",
                      password="1312",
                      host="localhost",
                      port="5432",
                      database="mibasedaniel")
cursor = conexion.cursor()
sql="select avg(case when xp.departamento='02' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) LP, avg(case when xp.departamento='03' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) CB, avg(case when xp.departamento='04' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) RU, avg(case when xp.departamento='05' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) PT, avg(case when xp.departamento='06' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) TJ, avg(case when xp.departamento='07' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) SC , avg(case when xp.departamento='01' then (xi.nota1+xi.nota2+xi.nota3+xi.nota_final) end) CH from persona xp, inscripcion xi where xp.ci=cast(xi.ci_estudiante as numeric)"
cursor.execute(sql)
registros = cursor.fetchall()
#print(registros)
for registro in registros:
    print("LP = ",redondeo(registro[0]))
    print("CB = ",redondeo(registro[1]))
    print("OR = ",redondeo(registro[1]))
    print("PT = ",redondeo(registro[3]))
    print("TA = ",redondeo(registro[4]))
    print("SC = ",redondeo(registro[5]))
    print("CH = ",redondeo(registro[6]))
cursor.close()
conexion.close()