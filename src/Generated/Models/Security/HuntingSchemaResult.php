<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HuntingSchemaResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new HuntingSchemaResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HuntingSchemaResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HuntingSchemaResult {
        return new HuntingSchemaResult();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'functions' => fn(ParseNode $n) => $o->setFunctions($n->getObjectValue([HuntingSchemaFunctions::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tables' => fn(ParseNode $n) => $o->setTables($n->getCollectionOfObjectValues([HuntingSchemaTable::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the functions property value. Object containing the built-in functions and saved functions available to the user.
     * @return HuntingSchemaFunctions|null
    */
    public function getFunctions(): ?HuntingSchemaFunctions {
        $val = $this->getBackingStore()->get('functions');
        if (is_null($val) || $val instanceof HuntingSchemaFunctions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'functions'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the tables property value. Collection of advanced hunting tables the user is authorized to query.
     * @return array<HuntingSchemaTable>|null
    */
    public function getTables(): ?array {
        $val = $this->getBackingStore()->get('tables');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HuntingSchemaTable::class);
            /** @var array<HuntingSchemaTable>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tables'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('functions', $this->getFunctions());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('tables', $this->getTables());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the functions property value. Object containing the built-in functions and saved functions available to the user.
     * @param HuntingSchemaFunctions|null $value Value to set for the functions property.
    */
    public function setFunctions(?HuntingSchemaFunctions $value): void {
        $this->getBackingStore()->set('functions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the tables property value. Collection of advanced hunting tables the user is authorized to query.
     * @param array<HuntingSchemaTable>|null $value Value to set for the tables property.
    */
    public function setTables(?array $value): void {
        $this->getBackingStore()->set('tables', $value);
    }

}
