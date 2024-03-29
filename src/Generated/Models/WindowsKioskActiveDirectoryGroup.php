<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The class used to identify an Azure Directory group for the kiosk configuration
*/
class WindowsKioskActiveDirectoryGroup extends WindowsKioskUser implements Parsable 
{
    /**
     * Instantiates a new WindowsKioskActiveDirectoryGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskActiveDirectoryGroup');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskActiveDirectoryGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskActiveDirectoryGroup {
        return new WindowsKioskActiveDirectoryGroup();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupName' => fn(ParseNode $n) => $o->setGroupName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the groupName property value. The name of the AD group that will be locked to this kiosk configuration
     * @return string|null
    */
    public function getGroupName(): ?string {
        $val = $this->getBackingStore()->get('groupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupName', $this->getGroupName());
    }

    /**
     * Sets the groupName property value. The name of the AD group that will be locked to this kiosk configuration
     * @param string|null $value Value to set for the groupName property.
    */
    public function setGroupName(?string $value): void {
        $this->getBackingStore()->set('groupName', $value);
    }

}
