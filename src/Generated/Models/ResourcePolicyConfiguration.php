<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResourcePolicyConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new ResourcePolicyConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResourcePolicyConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResourcePolicyConfiguration {
        return new ResourcePolicyConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'privilegedReadSetting' => fn(ParseNode $n) => $o->setPrivilegedReadSetting($n->getObjectValue([PrivilegedReadSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the privilegedReadSetting property value. The privilegedReadSetting property
     * @return PrivilegedReadSetting|null
    */
    public function getPrivilegedReadSetting(): ?PrivilegedReadSetting {
        $val = $this->getBackingStore()->get('privilegedReadSetting');
        if (is_null($val) || $val instanceof PrivilegedReadSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privilegedReadSetting'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('privilegedReadSetting', $this->getPrivilegedReadSetting());
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the privilegedReadSetting property value. The privilegedReadSetting property
     * @param PrivilegedReadSetting|null $value Value to set for the privilegedReadSetting property.
    */
    public function setPrivilegedReadSetting(?PrivilegedReadSetting $value): void {
        $this->getBackingStore()->set('privilegedReadSetting', $value);
    }

}
