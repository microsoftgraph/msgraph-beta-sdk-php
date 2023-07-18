<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpRange extends RuleDestination implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new ipRange and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.ipRange');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpRange {
        return new IpRange();
    }

    /**
     * Gets the beginAddress property value. Specifies the starting IP address of the IP range.
     * @return string|null
    */
    public function getBeginAddress(): ?string {
        $val = $this->getBackingStore()->get('beginAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'beginAddress'");
    }

    /**
     * Gets the endAddress property value. Specifies the ending IP address of the IP range.
     * @return string|null
    */
    public function getEndAddress(): ?string {
        $val = $this->getBackingStore()->get('endAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'beginAddress' => fn(ParseNode $n) => $o->setBeginAddress($n->getStringValue()),
            'endAddress' => fn(ParseNode $n) => $o->setEndAddress($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('beginAddress', $this->getBeginAddress());
        $writer->writeStringValue('endAddress', $this->getEndAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the beginAddress property value. Specifies the starting IP address of the IP range.
     * @param string|null $value Value to set for the beginAddress property.
    */
    public function setBeginAddress(?string $value): void {
        $this->getBackingStore()->set('beginAddress', $value);
    }

    /**
     * Sets the endAddress property value. Specifies the ending IP address of the IP range.
     * @param string|null $value Value to set for the endAddress property.
    */
    public function setEndAddress(?string $value): void {
        $this->getBackingStore()->set('endAddress', $value);
    }

}
