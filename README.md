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
