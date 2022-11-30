<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Updates extends Entity implements Parsable 
{
    /**
     * Instantiates a new updates and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Updates
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Updates {
        return new Updates();
    }

    /**
     * Gets the catalog property value. Catalog of content that can be approved for deployment by the deployment service. Read-only.
     * @return Catalog|null
    */
    public function getCatalog(): ?Catalog {
        return $this->getBackingStore()->get('catalog');
    }

    /**
     * Gets the deployments property value. Deployments created using the deployment service. Read-only.
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
            'deployments' => fn(ParseNode $n) => $o->setDeployments($n->getCollectionOfObjectValues([Deployment::class, 'createFromDiscriminatorValue'])),
            'resourceConnections' => fn(ParseNode $n) => $o->setResourceConnections($n->getCollectionOfObjectValues([ResourceConnection::class, 'createFromDiscriminatorValue'])),
            'updatableAssets' => fn(ParseNode $n) => $o->setUpdatableAssets($n->getCollectionOfObjectValues([UpdatableAsset::class, 'createFromDiscriminatorValue'])),
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
     * Gets the updatableAssets property value. Assets registered with the deployment service that can receive updates. Read-only.
     * @return array<UpdatableAsset>|null
    */
    public function getUpdatableAssets(): ?array {
        return $this->getBackingStore()->get('updatableAssets');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('catalog', $this->getCatalog());
        $writer->writeCollectionOfObjectValues('deployments', $this->getDeployments());
        $writer->writeCollectionOfObjectValues('resourceConnections', $this->getResourceConnections());
        $writer->writeCollectionOfObjectValues('updatableAssets', $this->getUpdatableAssets());
    }

    /**
     * Sets the catalog property value. Catalog of content that can be approved for deployment by the deployment service. Read-only.
     *  @param Catalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?Catalog $value): void {
        $this->getBackingStore()->set('catalog', $value);
    }

    /**
     * Sets the deployments property value. Deployments created using the deployment service. Read-only.
     *  @param array<Deployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value): void {
        $this->getBackingStore()->set('deployments', $value);
    }

    /**
     * Sets the resourceConnections property value. Service connections to external resources such as analytics workspaces.
     *  @param array<ResourceConnection>|null $value Value to set for the resourceConnections property.
    */
    public function setResourceConnections(?array $value): void {
        $this->getBackingStore()->set('resourceConnections', $value);
    }

    /**
     * Sets the updatableAssets property value. Assets registered with the deployment service that can receive updates. Read-only.
     *  @param array<UpdatableAsset>|null $value Value to set for the updatableAssets property.
    */
    public function setUpdatableAssets(?array $value): void {
        $this->getBackingStore()->set('updatableAssets', $value);
    }

}
