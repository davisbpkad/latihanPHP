## Docker

1. Containerization Basics
   Understanding containers vs VMs
   Docker architecture overview
   Docker installation (Desktop/Engine)
   Basic docker CLI commands

2. Working with Containers
   Running containers (docker run)
   Container lifecycle management
   Port mapping and networking
   Environment variables
   Container inspection (docker logs, docker inspect)

3. Building Images
   Dockerfile syntax
   Multi-stage builds
   Image optimization
   Working with Docker Hub
   Image tagging best practices

4. Docker Compose
   YAML file structure
   Service definitions
   Networking between containers
   Volume management
   Environment management

## Kubernetes

1.  Kubernetes Architecture
    Control plane components
    Worker nodes
    etcd database
    Kubernetes objects overview

2.  Basic Kubectl Commands
    Cluster interaction
    Context configuration
    Resource inspection
    Logs and debugging

3.  Workload Management
    Pods and containers
    Deployments
    ReplicaSets
    StatefulSets
    DaemonSets

4.  Networking & Services
    Cluster networking model
    Service types (ClusterIP, NodePort, LoadBalancer)
    Ingress controllers
    Network policies

5.  Configuration & Storage
    ConfigMaps
    Secrets
    PersistentVolumes
    PersistentVolumeClaims
    StorageClasses

## Advanced Kubernetes

1. Security
   RBAC authorization
   Service accounts
   Pod security policies
   Network policies
   Security contexts

2. Monitoring & Logging
   Metrics Server
   Prometheus stack
   Grafana dashboards
   EFK/ELK logging
   Kubernetes events

3. CI/CD Integration
   GitOps principles
   ArgoCD/FluxCD
   Kubernetes-aware CI pipelines
   Blue/green deployments
   Canary releases

4. Cluster Management
   Node management
   Resource quotas
   Horizontal Pod Autoscaling
   Cluster autoscaling
   Upgrade strategies

5. Production Best Practices
   Pod disruption budgets
   Affinity/anti-affinity rules
   Readiness/liveness probes
   Resource requests/limits
   Backup strategies (Velero)
