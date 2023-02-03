<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\Catalog;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\Deployment;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\DeploymentAudience;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\ResourceConnection;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatableAsset;
use Microsoft\Graph\Beta\Generated\Models\WindowsUpdates\UpdatePolicy;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminWindowsUpdates extends Entity implements Parsable 
{
    /**
     * Instantiates a new adminWindowsUpdates and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminWindowsUpdates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminWindowsUpdates {
        return new AdminWindowsUpdates();
    }

    /**
     * Gets the catalog property value. Catalog of content that can be approved for deployment by the deployment service. Read-only.
     * @return Catalog|null
    */
    public function getCatalog(): ?Catalog {
        return $this->getBackingStore()->get('catalog');
    }

    /**
     * Gets the deploymentAudiences property value. The set of updatableAsset resources to which a deployment can apply.
     * @return array<DeploymentAudience>|null
    */
    public function getDeploymentAudiences(): ?array {
        return $this->getBackingStore()->get('deploymentAudiences');
    }

    /**
     * Gets the deployments property value. Deployments created using the deployment service.
     * @return array<Deployment>|null
    */
    public function getDeployments(): ?array {
        return $this->getBackingStore()->get('deployments');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'catalog' => fn(ParseNode $n) => $o->setCatalog($n->getObjectValue([Catalog::class, 'createFromDiscriminatorValue'])),
            'deploymentAudiences' => fn(ParseNode $n) => $o->setDeploymentAudiences($n->getCollectionOfObjectValues([DeploymentAudience::class, 'createFromDiscriminatorValue'])),
            'deployments' => fn(ParseNode $n) => $o->setDeployments($n->getCollectionOfObjectValues([Deployment::class, 'createFromDiscriminatorValue'])),
            'resourceConnections' => fn(ParseNode $n) => $o->setResourceConnections($n->getCollectionOfObjectValues([ResourceConnection::class, 'createFromDiscriminatorValue'])),
            'updatableAssets' => fn(ParseNode $n) => $o->setUpdatableAssets($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
            'updatePolicies' => fn(ParseNode $n) => $o->setUpdatePolicies($n->getCollectionOfObjectValues([UpdatePolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceConnections property value. Service connections to external resources such as analytics workspaces.
     * @return array<ResourceConnection>|null
    */
    public function getResourceConnections(): ?array {
        return $this->getBackingStore()->get('resourceConnections');
    }

    /**
     * Gets the updatableAssets property value. Assets registered with the deployment service that can receive updates.
     * @return array<UpdatableAsset>|null
    */
    public function getUpdatableAssets(): ?array {
        return $this->getBackingStore()->get('updatableAssets');
    }

    /**
     * Gets the updatePolicies property value. A collection of policies for approving the deployment of different content to an audience over time.
     * @return array<UpdatePolicy>|null
    */
    public function getUpdatePolicies(): ?array {
        return $this->getBackingStore()->get('updatePolicies');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('catalog', $this->getCatalog());
        $writer->writeCollectionOfObjectValues('deploymentAudiences', $this->getDeploymentAudiences());
        $writer->writeCollectionOfObjectValues('deployments', $this->getDeployments());
        $writer->writeCollectionOfObjectValues('resourceConnections', $this->getResourceConnections());
        $writer->writeCollectionOfObjectValues('updatableAssets', $this->getUpdatableAssets());
        $writer->writeCollectionOfObjectValues('updatePolicies', $this->getUpdatePolicies());
    }

    /**
     * Sets the catalog property value. Catalog of content that can be approved for deployment by the deployment service. Read-only.
     * @param Catalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?Catalog $value): void {
        $this->getBackingStore()->set('catalog', $value);
    }

    /**
     * Sets the deploymentAudiences property value. The set of updatableAsset resources to which a deployment can apply.
     * @param array<DeploymentAudience>|null $value Value to set for the deploymentAudiences property.
    */
    public function setDeploymentAudiences(?array $value): void {
        $this->getBackingStore()->set('deploymentAudiences', $value);
    }

    /**
     * Sets the deployments property value. Deployments created using the deployment service.
     * @param array<Deployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value): void {
        $this->getBackingStore()->set('deployments', $value);
    }

    /**
     * Sets the resourceConnections property value. Service connections to external resources such as analytics workspaces.
     * @param array<ResourceConnection>|null $value Value to set for the resourceConnections property.
    */
    public function setResourceConnections(?array $value): void {
        $this->getBackingStore()->set('resourceConnections', $value);
    }

    /**
     * Sets the updatableAssets property value. Assets registered with the deployment service that can receive updates.
     * @param array<UpdatableAsset>|null $value Value to set for the updatableAssets property.
    */
    public function setUpdatableAssets(?array $value): void {
        $this->getBackingStore()->set('updatableAssets', $value);
    }

    /**
     * Sets the updatePolicies property value. A collection of policies for approving the deployment of different content to an audience over time.
     * @param array<UpdatePolicy>|null $value Value to set for the updatePolicies property.
    */
    public function setUpdatePolicies(?array $value): void {
        $this->getBackingStore()->set('updatePolicies', $value);
    }

}
