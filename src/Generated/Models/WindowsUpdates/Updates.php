<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Updates extends Entity implements Parsable 
{
    /**
     * @var Catalog|null $catalog Catalog of content that can be approved for deployment by the deployment service. Read-only.
    */
    private ?Catalog $catalog = null;
    
    /**
     * @var array<Deployment>|null $deployments Deployments created using the deployment service. Read-only.
    */
    private ?array $deployments = null;
    
    /**
     * @var array<ResourceConnection>|null $resourceConnections Service connections to external resources such as analytics workspaces.
    */
    private ?array $resourceConnections = null;
    
    /**
     * @var array<UpdatableAsset>|null $updatableAssets Assets registered with the deployment service that can receive updates. Read-only.
    */
    private ?array $updatableAssets = null;
    
    /**
     * Instantiates a new updates and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.updates');
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
        return $this->catalog;
    }

    /**
     * Gets the deployments property value. Deployments created using the deployment service. Read-only.
     * @return array<Deployment>|null
    */
    public function getDeployments(): ?array {
        return $this->deployments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'catalog' => function (ParseNode $n) use ($o) { $o->setCatalog($n->getObjectValue(array(Catalog::class, 'createFromDiscriminatorValue'))); },
            'deployments' => function (ParseNode $n) use ($o) { $o->setDeployments($n->getCollectionOfObjectValues(array(Deployment::class, 'createFromDiscriminatorValue'))); },
            'resourceConnections' => function (ParseNode $n) use ($o) { $o->setResourceConnections($n->getCollectionOfObjectValues(array(ResourceConnection::class, 'createFromDiscriminatorValue'))); },
            'updatableAssets' => function (ParseNode $n) use ($o) { $o->setUpdatableAssets($n->getCollectionOfObjectValues(array(UpdatableAsset::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the resourceConnections property value. Service connections to external resources such as analytics workspaces.
     * @return array<ResourceConnection>|null
    */
    public function getResourceConnections(): ?array {
        return $this->resourceConnections;
    }

    /**
     * Gets the updatableAssets property value. Assets registered with the deployment service that can receive updates. Read-only.
     * @return array<UpdatableAsset>|null
    */
    public function getUpdatableAssets(): ?array {
        return $this->updatableAssets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('catalog', $this->catalog);
        $writer->writeCollectionOfObjectValues('deployments', $this->deployments);
        $writer->writeCollectionOfObjectValues('resourceConnections', $this->resourceConnections);
        $writer->writeCollectionOfObjectValues('updatableAssets', $this->updatableAssets);
    }

    /**
     * Sets the catalog property value. Catalog of content that can be approved for deployment by the deployment service. Read-only.
     *  @param Catalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?Catalog $value ): void {
        $this->catalog = $value;
    }

    /**
     * Sets the deployments property value. Deployments created using the deployment service. Read-only.
     *  @param array<Deployment>|null $value Value to set for the deployments property.
    */
    public function setDeployments(?array $value ): void {
        $this->deployments = $value;
    }

    /**
     * Sets the resourceConnections property value. Service connections to external resources such as analytics workspaces.
     *  @param array<ResourceConnection>|null $value Value to set for the resourceConnections property.
    */
    public function setResourceConnections(?array $value ): void {
        $this->resourceConnections = $value;
    }

    /**
     * Sets the updatableAssets property value. Assets registered with the deployment service that can receive updates. Read-only.
     *  @param array<UpdatableAsset>|null $value Value to set for the updatableAssets property.
    */
    public function setUpdatableAssets(?array $value ): void {
        $this->updatableAssets = $value;
    }

}
