<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewPolicy extends Entity implements Parsable 
{
    /**
     * @var string|null $description Description for this policy. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name for this policy. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isGroupOwnerManagementEnabled If true, group owners can create and manage access reviews on groups they own.
    */
    private ?bool $isGroupOwnerManagementEnabled = null;
    
    /**
     * Instantiates a new accessReviewPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewPolicy {
        return new AccessReviewPolicy();
    }

    /**
     * Gets the description property value. Description for this policy. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name for this policy. Read-only.
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
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isGroupOwnerManagementEnabled' => fn(ParseNode $n) => $o->setIsGroupOwnerManagementEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isGroupOwnerManagementEnabled property value. If true, group owners can create and manage access reviews on groups they own.
     * @return bool|null
    */
    public function getIsGroupOwnerManagementEnabled(): ?bool {
        return $this->isGroupOwnerManagementEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isGroupOwnerManagementEnabled', $this->isGroupOwnerManagementEnabled);
    }

    /**
     * Sets the description property value. Description for this policy. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name for this policy. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isGroupOwnerManagementEnabled property value. If true, group owners can create and manage access reviews on groups they own.
     *  @param bool|null $value Value to set for the isGroupOwnerManagementEnabled property.
    */
    public function setIsGroupOwnerManagementEnabled(?bool $value ): void {
        $this->isGroupOwnerManagementEnabled = $value;
    }

}
