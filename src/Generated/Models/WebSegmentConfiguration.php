<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WebSegmentConfiguration extends SegmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new WebSegmentConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.webSegmentConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebSegmentConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebSegmentConfiguration {
        return new WebSegmentConfiguration();
    }

    /**
     * Gets the applicationSegments property value. The applicationSegments property
     * @return array<WebApplicationSegment>|null
    */
    public function getApplicationSegments(): ?array {
        $val = $this->getBackingStore()->get('applicationSegments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WebApplicationSegment::class);
            /** @var array<WebApplicationSegment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationSegments'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationSegments' => fn(ParseNode $n) => $o->setApplicationSegments($n->getCollectionOfObjectValues([WebApplicationSegment::class, 'createFromDiscriminatorValue'])),
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
     * @param array<WebApplicationSegment>|null $value Value to set for the applicationSegments property.
    */
    public function setApplicationSegments(?array $value): void {
        $this->getBackingStore()->set('applicationSegments', $value);
    }

}
