<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigManagerCollection extends Entity implements Parsable 
{
    /**
     * @var string|null $collectionIdentifier The collection identifier in SCCM.
    */
    private ?string $collectionIdentifier = null;
    
    /**
     * @var DateTime|null $createdDateTime The created date.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The DisplayName.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $hierarchyIdentifier The Hierarchy Identifier.
    */
    private ?string $hierarchyIdentifier = null;
    
    /**
     * @var string|null $hierarchyName The HierarchyName.
    */
    private ?string $hierarchyName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The last modified date.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new ConfigManagerCollection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.configManagerCollection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigManagerCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigManagerCollection {
        return new ConfigManagerCollection();
    }

    /**
     * Gets the collectionIdentifier property value. The collection identifier in SCCM.
     * @return string|null
    */
    public function getCollectionIdentifier(): ?string {
        return $this->collectionIdentifier;
    }

    /**
     * Gets the createdDateTime property value. The created date.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The DisplayName.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'collectionIdentifier' => function (ParseNode $n) use ($o) { $o->setCollectionIdentifier($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'hierarchyIdentifier' => function (ParseNode $n) use ($o) { $o->setHierarchyIdentifier($n->getStringValue()); },
            'hierarchyName' => function (ParseNode $n) use ($o) { $o->setHierarchyName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the hierarchyIdentifier property value. The Hierarchy Identifier.
     * @return string|null
    */
    public function getHierarchyIdentifier(): ?string {
        return $this->hierarchyIdentifier;
    }

    /**
     * Gets the hierarchyName property value. The HierarchyName.
     * @return string|null
    */
    public function getHierarchyName(): ?string {
        return $this->hierarchyName;
    }

    /**
     * Gets the lastModifiedDateTime property value. The last modified date.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('collectionIdentifier', $this->collectionIdentifier);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('hierarchyIdentifier', $this->hierarchyIdentifier);
        $writer->writeStringValue('hierarchyName', $this->hierarchyName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the collectionIdentifier property value. The collection identifier in SCCM.
     *  @param string|null $value Value to set for the collectionIdentifier property.
    */
    public function setCollectionIdentifier(?string $value ): void {
        $this->collectionIdentifier = $value;
    }

    /**
     * Sets the createdDateTime property value. The created date.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The DisplayName.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the hierarchyIdentifier property value. The Hierarchy Identifier.
     *  @param string|null $value Value to set for the hierarchyIdentifier property.
    */
    public function setHierarchyIdentifier(?string $value ): void {
        $this->hierarchyIdentifier = $value;
    }

    /**
     * Sets the hierarchyName property value. The HierarchyName.
     *  @param string|null $value Value to set for the hierarchyName property.
    */
    public function setHierarchyName(?string $value ): void {
        $this->hierarchyName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The last modified date.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
