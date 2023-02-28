<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpSegmentConfiguration extends SegmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new IpSegmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ipSegmentConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpSegmentConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpSegmentConfiguration {
        return new IpSegmentConfiguration();
    }

    /**
     * Gets the applicationSegments property value. The applicationSegments property
     * @return array<IpApplicationSegment>|null
    */
    public function getApplicationSegments(): ?array {
        return $this->getBackingStore()->get('applicationSegments');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationSegments' => fn(ParseNode $n) => $o->setApplicationSegments($n->getCollectionOfObjectValues([IpApplicationSegment::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applicationSegments', $this->getApplicationSegments());
    }

    /**
     * Sets the applicationSegments property value. The applicationSegments property
     * @param array<IpApplicationSegment>|null $value Value to set for the applicationSegments property.
    */
    public function setApplicationSegments(?array $value): void {
        $this->getBackingStore()->set('applicationSegments', $value);
    }

}
