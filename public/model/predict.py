import argparse
parser=argparse.ArgumentParser()                              
parser.add_argument('--age',type=int)
parser.add_argument('--sex',type=int)
parser.add_argument('--cp',type=int)
parser.add_argument('--trestbps',type=int)
parser.add_argument('--chol',type=int)
parser.add_argument('--fbs',type=int)
parser.add_argument('--restecg',type=int)
parser.add_argument('--thalach',type=int)
parser.add_argument('--exang',type=int)
parser.add_argument('--oldpeak',type=float)
parser.add_argument('--slope',type=int)
parser.add_argument('--ca',type=int)
parser.add_argument('--thal',type=int)
ar=parser.parse_args()
import pickle
fm=pickle.load(open('model/moctormodel.pk','rb'))
a=[]
a=[[ar.age,ar.sex,ar.cp,ar.trestbps,ar.chol,ar.fbs,ar.restecg,ar.thalach,ar.exang,ar.oldpeak,ar.slope,ar.ca,ar.thal]]
res= fm.predict(a)[0]
print(res)

