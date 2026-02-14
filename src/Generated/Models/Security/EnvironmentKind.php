<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Enum;

class EnvironmentKind extends Enum {
    public const AZURE_SUBSCRIPTION = "azureSubscription";
    public const AWS_ORGANIZATION = "awsOrganization";
    public const AWS_ACCOUNT = "awsAccount";
    public const GCP_ORGANIZATION = "gcpOrganization";
    public const GCP_PROJECT = "gcpProject";
    public const DOCKERS_HUB_ORGANIZATION = "dockersHubOrganization";
    public const DEV_OPS_CONNECTION = "devOpsConnection";
    public const AZURE_DEV_OPS_ORGANIZATION = "azureDevOpsOrganization";
    public const GIT_HUB_ORGANIZATION = "gitHubOrganization";
    public const GIT_LAB_GROUP = "gitLabGroup";
    public const J_FROG_ARTIFACTORY = "jFrogArtifactory";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
