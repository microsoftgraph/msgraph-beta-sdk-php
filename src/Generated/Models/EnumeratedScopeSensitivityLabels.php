<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EnumeratedScopeSensitivityLabels extends ScopeSensitivityLabels implements Parsable 
{
    /**
     * Instantiates a new EnumeratedScopeSensitivityLabels and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.enumeratedScopeSensitivityLabels');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnumeratedScopeSensitivityLabels
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnumeratedScopeSensitivityLabels {
        return new EnumeratedScopeSensitivityLabels();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sensitivityLabels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensitivityLabels($val);
            },
        ]);
    }

    /**
     * Gets the sensitivityLabels property value. The sensitivity labels that are applicable to the scope type and have been preapproved. Required.
     * @return array<string>|null
    */
    public function getSensitivityLabels(): ?array {
        $val = $this->getBackingStore()->get('sensitivityLabels');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabels'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('sensitivityLabels', $this->getSensitivityLabels());
    }

    /**
     * Sets the sensitivityLabels property value. The sensitivity labels that are applicable to the scope type and have been preapproved. Required.
     * @param array<string>|null $value Value to set for the sensitivityLabels property.
    */
    public function setSensitivityLabels(?array $value): void {
        $this->getBackingStore()->set('sensitivityLabels', $value);
    }

}
