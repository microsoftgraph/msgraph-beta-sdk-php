<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessSettings extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new crossTenantAccessSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessSettings {
        return new CrossTenantAccessSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'networkPacketTaggingStatus' => fn(ParseNode $n) => $o->setNetworkPacketTaggingStatus($n->getEnumValue(Status::class)),
        ]);
    }

    /**
     * Gets the networkPacketTaggingStatus property value. The networkPacketTaggingStatus property
     * @return Status|null
    */
    public function getNetworkPacketTaggingStatus(): ?Status {
        $val = $this->getBackingStore()->get('networkPacketTaggingStatus');
        if (is_null($val) || $val instanceof Status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'networkPacketTaggingStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('networkPacketTaggingStatus', $this->getNetworkPacketTaggingStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the networkPacketTaggingStatus property value. The networkPacketTaggingStatus property
     * @param Status|null $value Value to set for the networkPacketTaggingStatus property.
    */
    public function setNetworkPacketTaggingStatus(?Status $value): void {
        $this->getBackingStore()->set('networkPacketTaggingStatus', $value);
    }

}
