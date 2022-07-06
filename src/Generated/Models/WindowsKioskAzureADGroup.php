<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskAzureADGroup extends WindowsKioskUser implements Parsable 
{
    /**
     * @var string|null $displayName The display name of the AzureAD group that will be locked to this kiosk configuration
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $groupId The ID of the AzureAD group that will be locked to this kiosk configuration
    */
    private ?string $groupId = null;
    
    /**
     * Instantiates a new WindowsKioskAzureADGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskAzureADGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskAzureADGroup {
        return new WindowsKioskAzureADGroup();
    }

    /**
     * Gets the displayName property value. The display name of the AzureAD group that will be locked to this kiosk configuration
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
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'groupId' => function (ParseNode $n) use ($o) { $o->setGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the groupId property value. The ID of the AzureAD group that will be locked to this kiosk configuration
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('groupId', $this->groupId);
    }

    /**
     * Sets the displayName property value. The display name of the AzureAD group that will be locked to this kiosk configuration
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the groupId property value. The ID of the AzureAD group that will be locked to this kiosk configuration
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

}
