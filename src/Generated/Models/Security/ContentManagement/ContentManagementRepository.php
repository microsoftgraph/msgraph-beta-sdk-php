<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A connected source-control repository that delivers security content as code(the customer-facing shape of the internal Source Control resource). Tenant is resolvedfrom the caller token; there is no subscription, resource group, or workspace in the path.
*/
class ContentManagementRepository extends Entity implements Parsable 
{
    /**
     * Instantiates a new ContentManagementRepository and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentManagementRepository
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentManagementRepository {
        return new ContentManagementRepository();
    }

    /**
     * Gets the contentTypes property value. Content kinds this repository is configured to deploy. The possible values are: customDetection, unknownFutureValue, defenderWorkbook. Use the Prefer: include-unknown-enum-members request header to get defenderWorkbook.
     * @return array<RepositoryContentType>|null
    */
    public function getContentTypes(): ?array {
        $val = $this->getBackingStore()->get('contentTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RepositoryContentType::class);
            /** @var array<RepositoryContentType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentTypes'");
    }

    /**
     * Gets the deploymentIdentity property value. Bring-your-own deployment identity used for deployment. Optional; when omitted the platform-managed identity path is used. Provide a service principal or a managed identity. Immutable after connecting.
     * @return DeploymentIdentity|null
    */
    public function getDeploymentIdentity(): ?DeploymentIdentity {
        $val = $this->getBackingStore()->get('deploymentIdentity');
        if (is_null($val) || $val instanceof DeploymentIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentIdentity'");
    }

    /**
     * Gets the deploymentScope property value. Optional Azure deployment scope, immutable after connecting the repository.
     * @return DeploymentScope|null
    */
    public function getDeploymentScope(): ?DeploymentScope {
        $val = $this->getBackingStore()->get('deploymentScope');
        if (is_null($val) || $val instanceof DeploymentScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentScope'");
    }

    /**
     * Gets the description property value. Optional description of the connection.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Human-readable name of the connection. Supports $filter (eq, ne) and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentTypes' => fn(ParseNode $n) => $o->setContentTypes($n->getCollectionOfEnumValues(RepositoryContentType::class)),
            'deploymentIdentity' => fn(ParseNode $n) => $o->setDeploymentIdentity($n->getObjectValue([DeploymentIdentity::class, 'createFromDiscriminatorValue'])),
            'deploymentScope' => fn(ParseNode $n) => $o->setDeploymentScope($n->getObjectValue([DeploymentScope::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastDeploymentInfo' => fn(ParseNode $n) => $o->setLastDeploymentInfo($n->getObjectValue([RepositoryDeploymentInfo::class, 'createFromDiscriminatorValue'])),
            'pullRequest' => fn(ParseNode $n) => $o->setPullRequest($n->getObjectValue([RepositoryPullRequest::class, 'createFromDiscriminatorValue'])),
            'repoType' => fn(ParseNode $n) => $o->setRepoType($n->getEnumValue(RepositoryType::class)),
            'servicePrincipal' => fn(ParseNode $n) => $o->setServicePrincipal($n->getObjectValue([RepositoryServicePrincipal::class, 'createFromDiscriminatorValue'])),
            'sourceLocation' => fn(ParseNode $n) => $o->setSourceLocation($n->getObjectValue([RepositorySettings::class, 'createFromDiscriminatorValue'])),
            'systemData' => fn(ParseNode $n) => $o->setSystemData($n->getObjectValue([SystemData::class, 'createFromDiscriminatorValue'])),
            'workloadIdentityFederation' => fn(ParseNode $n) => $o->setWorkloadIdentityFederation($n->getObjectValue([RepositoryWorkloadIdentityFederation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastDeploymentInfo property value. Status of the most recent deployment from this repository. Read-only.
     * @return RepositoryDeploymentInfo|null
    */
    public function getLastDeploymentInfo(): ?RepositoryDeploymentInfo {
        $val = $this->getBackingStore()->get('lastDeploymentInfo');
        if (is_null($val) || $val instanceof RepositoryDeploymentInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastDeploymentInfo'");
    }

    /**
     * Gets the pullRequest property value. The setup pull request opened for this connection, when applicable. Read-only.
     * @return RepositoryPullRequest|null
    */
    public function getPullRequest(): ?RepositoryPullRequest {
        $val = $this->getBackingStore()->get('pullRequest');
        if (is_null($val) || $val instanceof RepositoryPullRequest) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pullRequest'");
    }

    /**
     * Gets the repoType property value. Source-control provider.
     * @return RepositoryType|null
    */
    public function getRepoType(): ?RepositoryType {
        $val = $this->getBackingStore()->get('repoType');
        if (is_null($val) || $val instanceof RepositoryType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'repoType'");
    }

    /**
     * Gets the servicePrincipal property value. Service principal / managed identity used by the connection. Read-only.
     * @return RepositoryServicePrincipal|null
    */
    public function getServicePrincipal(): ?RepositoryServicePrincipal {
        $val = $this->getBackingStore()->get('servicePrincipal');
        if (is_null($val) || $val instanceof RepositoryServicePrincipal) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipal'");
    }

    /**
     * Gets the sourceLocation property value. Repository location settings.
     * @return RepositorySettings|null
    */
    public function getSourceLocation(): ?RepositorySettings {
        $val = $this->getBackingStore()->get('sourceLocation');
        if (is_null($val) || $val instanceof RepositorySettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceLocation'");
    }

    /**
     * Gets the systemData property value. Creation and last modification provenance. Read-only.
     * @return SystemData|null
    */
    public function getSystemData(): ?SystemData {
        $val = $this->getBackingStore()->get('systemData');
        if (is_null($val) || $val instanceof SystemData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemData'");
    }

    /**
     * Gets the workloadIdentityFederation property value. Workload identity federation details for the connection, when configured. Read-only.
     * @return RepositoryWorkloadIdentityFederation|null
    */
    public function getWorkloadIdentityFederation(): ?RepositoryWorkloadIdentityFederation {
        $val = $this->getBackingStore()->get('workloadIdentityFederation');
        if (is_null($val) || $val instanceof RepositoryWorkloadIdentityFederation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workloadIdentityFederation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('contentTypes', $this->getContentTypes());
        $writer->writeObjectValue('deploymentIdentity', $this->getDeploymentIdentity());
        $writer->writeObjectValue('deploymentScope', $this->getDeploymentScope());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('repoType', $this->getRepoType());
        $writer->writeObjectValue('sourceLocation', $this->getSourceLocation());
    }

    /**
     * Sets the contentTypes property value. Content kinds this repository is configured to deploy. The possible values are: customDetection, unknownFutureValue, defenderWorkbook. Use the Prefer: include-unknown-enum-members request header to get defenderWorkbook.
     * @param array<RepositoryContentType>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value): void {
        $this->getBackingStore()->set('contentTypes', $value);
    }

    /**
     * Sets the deploymentIdentity property value. Bring-your-own deployment identity used for deployment. Optional; when omitted the platform-managed identity path is used. Provide a service principal or a managed identity. Immutable after connecting.
     * @param DeploymentIdentity|null $value Value to set for the deploymentIdentity property.
    */
    public function setDeploymentIdentity(?DeploymentIdentity $value): void {
        $this->getBackingStore()->set('deploymentIdentity', $value);
    }

    /**
     * Sets the deploymentScope property value. Optional Azure deployment scope, immutable after connecting the repository.
     * @param DeploymentScope|null $value Value to set for the deploymentScope property.
    */
    public function setDeploymentScope(?DeploymentScope $value): void {
        $this->getBackingStore()->set('deploymentScope', $value);
    }

    /**
     * Sets the description property value. Optional description of the connection.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Human-readable name of the connection. Supports $filter (eq, ne) and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastDeploymentInfo property value. Status of the most recent deployment from this repository. Read-only.
     * @param RepositoryDeploymentInfo|null $value Value to set for the lastDeploymentInfo property.
    */
    public function setLastDeploymentInfo(?RepositoryDeploymentInfo $value): void {
        $this->getBackingStore()->set('lastDeploymentInfo', $value);
    }

    /**
     * Sets the pullRequest property value. The setup pull request opened for this connection, when applicable. Read-only.
     * @param RepositoryPullRequest|null $value Value to set for the pullRequest property.
    */
    public function setPullRequest(?RepositoryPullRequest $value): void {
        $this->getBackingStore()->set('pullRequest', $value);
    }

    /**
     * Sets the repoType property value. Source-control provider.
     * @param RepositoryType|null $value Value to set for the repoType property.
    */
    public function setRepoType(?RepositoryType $value): void {
        $this->getBackingStore()->set('repoType', $value);
    }

    /**
     * Sets the servicePrincipal property value. Service principal / managed identity used by the connection. Read-only.
     * @param RepositoryServicePrincipal|null $value Value to set for the servicePrincipal property.
    */
    public function setServicePrincipal(?RepositoryServicePrincipal $value): void {
        $this->getBackingStore()->set('servicePrincipal', $value);
    }

    /**
     * Sets the sourceLocation property value. Repository location settings.
     * @param RepositorySettings|null $value Value to set for the sourceLocation property.
    */
    public function setSourceLocation(?RepositorySettings $value): void {
        $this->getBackingStore()->set('sourceLocation', $value);
    }

    /**
     * Sets the systemData property value. Creation and last modification provenance. Read-only.
     * @param SystemData|null $value Value to set for the systemData property.
    */
    public function setSystemData(?SystemData $value): void {
        $this->getBackingStore()->set('systemData', $value);
    }

    /**
     * Sets the workloadIdentityFederation property value. Workload identity federation details for the connection, when configured. Read-only.
     * @param RepositoryWorkloadIdentityFederation|null $value Value to set for the workloadIdentityFederation property.
    */
    public function setWorkloadIdentityFederation(?RepositoryWorkloadIdentityFederation $value): void {
        $this->getBackingStore()->set('workloadIdentityFederation', $value);
    }

}
