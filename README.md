# Spryker k8s setup

## Installation

* You need kubectl installed


## Usage

**Start Spryker B2B Syste,**:
```
bash run spryker_b2b_php73
```

**Now wait until jenkins is reachable. Depend on your connection speed it could need a few minutes.** Then you can start the spryker install.
```
bash run spryker_b2b_php73 install
```

You can check the current status to view the logs from the installer pod.  
For that you have to get the pod name:
```
kubectl get pods

NAME                                READY   STATUS    RESTARTS   AGE
app-glue-567c56586b-mdt8s           1/1     Running   0          26m
app-yves-55b6666d76-fv8jd           1/1     Running   0          26m
app-zed-5d7b76b6d8-ff7kv            1/1     Running   0          26m
env-elasticsearch-688cb6879-qjxdl   1/1     Running   0          26m
env-jenkins-64c6f87d6f-2qgdp        1/1     Running   0          26m
env-postgres-7ff8dd5b9c-8f8jb       1/1     Running   0          26m
env-rabbitmq-66db67c76d-c2g86       1/1     Running   0          26m
env-redis-74bfb6b8dc-gjv8r          1/1     Running   0          26m
lb-sprykerb2b-6586fddb6c-76hqb      1/1     Running   0          26m
spryker-b2b-installer-rsb7w         1/1     Running   0          25m
```

To view the logs run:
```
kubectl logs -f spryker-b2b-installer-rsb7w
```

**With customized script (stored in ./scripts/)**:
```
bash run <scriptname>
```

**Use loadbalancer**:
```
kubectl port-forward deployment/lb-sprykerb2b 80:80
```


## Current default

* Current default is "spryker_b2b_php73"


## Build docker images locally

```
bash run build

# To push all
docker push mibexx/k8s-app:7.3 && docker push mibexx/k8s-jenkins:7.3 && docker push mibexx/k8s-spryker:b2b-core && docker push mibexx/k8s-lb:spryker-b2b && docker push mibexx/k8s-spryker:b2b-deployer && docker push mibexx/k8s-spryker:b2b-jenkins && docker push mibexx/k8s-spryker:b2b-yves && docker push mibexx/k8s-spryker:b2b-zed && docker push mibexx/k8s-spryker:b2b-glue
```


## Destroy environment
```
bash run <script> rm

# Default
bash run default rm
```
