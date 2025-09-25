<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesSyncBehavior extends Entity implements Parsable 
{
    /**
     * Instantiates a new OnPremisesSyncBehavior and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesSyncBehavior
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesSyncBehavior {
        return new OnPremisesSyncBehavior();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isCloudManaged' => fn(ParseNode $n) => $o->setIsCloudManaged($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isCloudManaged property value. Indicates the state of synchronization for an object between the cloud and on-premises Active Directory. If true, updates from on-premises Active Directory are blocked in the cloud; if false, updates from on-premises Active Directory are allowed in the cloud and the on-premises Active Directory can take over the object.
     * @return bool|null
    */
    public function getIsCloudManaged(): ?bool {
        $val = $this->getBackingStore()->get('isCloudManaged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCloudManaged'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isCloudManaged', $this->getIsCloudManaged());
    }

    /**
     * Sets the isCloudManaged property value. Indicates the state of synchronization for an object between the cloud and on-premises Active Directory. If true, updates from on-premises Active Directory are blocked in the cloud; if false, updates from on-premises Active Directory are allowed in the cloud and the on-premises Active Directory can take over the object.
     * @param bool|null $value Value to set for the isCloudManaged property.
    */
    public function setIsCloudManaged(?bool $value): void {
        $this->getBackingStore()->set('isCloudManaged', $value);
    }

}
