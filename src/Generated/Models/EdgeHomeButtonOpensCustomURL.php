<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The home button configuration base class used to identify the available options
*/
class EdgeHomeButtonOpensCustomURL extends EdgeHomeButtonConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new edgeHomeButtonOpensCustomURL and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.edgeHomeButtonOpensCustomURL');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeHomeButtonOpensCustomURL
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeHomeButtonOpensCustomURL {
        return new EdgeHomeButtonOpensCustomURL();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'homeButtonCustomURL' => fn(ParseNode $n) => $o->setHomeButtonCustomURL($n->getStringValue()),
        ]);
    }

    /**
     * Gets the homeButtonCustomURL property value. The specific URL to load.
     * @return string|null
    */
    public function getHomeButtonCustomURL(): ?string {
        $val = $this->getBackingStore()->get('homeButtonCustomURL');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeButtonCustomURL'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('homeButtonCustomURL', $this->getHomeButtonCustomURL());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the homeButtonCustomURL property value. The specific URL to load.
     * @param string|null $value Value to set for the homeButtonCustomURL property.
    */
    public function setHomeButtonCustomURL(?string $value): void {
        $this->getBackingStore()->set('homeButtonCustomURL', $value);
    }

}
