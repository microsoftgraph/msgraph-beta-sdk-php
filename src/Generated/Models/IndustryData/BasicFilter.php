<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class BasicFilter extends Filter implements Parsable 
{
    /**
     * Instantiates a new BasicFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.basicFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BasicFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BasicFilter {
        return new BasicFilter();
    }

    /**
     * Gets the attribute property value. The attribute property
     * @return FilterOptions|null
    */
    public function getAttribute(): ?FilterOptions {
        $val = $this->getBackingStore()->get('attribute');
        if (is_null($val) || $val instanceof FilterOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attribute'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attribute' => fn(ParseNode $n) => $o->setAttribute($n->getEnumValue(FilterOptions::class)),
            'in' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIn($val);
            },
        ]);
    }

    /**
     * Gets the in property value. The condition to filter with.
     * @return array<string>|null
    */
    public function getIn(): ?array {
        $val = $this->getBackingStore()->get('in');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'in'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('attribute', $this->getAttribute());
        $writer->writeCollectionOfPrimitiveValues('in', $this->getIn());
    }

    /**
     * Sets the attribute property value. The attribute property
     * @param FilterOptions|null $value Value to set for the attribute property.
    */
    public function setAttribute(?FilterOptions $value): void {
        $this->getBackingStore()->set('attribute', $value);
    }

    /**
     * Sets the in property value. The condition to filter with.
     * @param array<string>|null $value Value to set for the in property.
    */
    public function setIn(?array $value): void {
        $this->getBackingStore()->set('in', $value);
    }

}
