<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AwsStatement implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AwsStatement and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsStatement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsStatement {
        return new AwsStatement();
    }

    /**
     * Gets the actions property value. The AWS actions.
     * @return array<string>|null
    */
    public function getActions(): ?array {
        $val = $this->getBackingStore()->get('actions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actions'");
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
     * Gets the condition property value. The AWS conditions associated with the statement.
     * @return AwsCondition|null
    */
    public function getCondition(): ?AwsCondition {
        $val = $this->getBackingStore()->get('condition');
        if (is_null($val) || $val instanceof AwsCondition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'condition'");
    }

    /**
     * Gets the effect property value. The effect property
     * @return AwsStatementEffect|null
    */
    public function getEffect(): ?AwsStatementEffect {
        $val = $this->getBackingStore()->get('effect');
        if (is_null($val) || $val instanceof AwsStatementEffect) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'effect'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setActions($val);
            },
            'condition' => fn(ParseNode $n) => $o->setCondition($n->getObjectValue([AwsCondition::class, 'createFromDiscriminatorValue'])),
            'effect' => fn(ParseNode $n) => $o->setEffect($n->getEnumValue(AwsStatementEffect::class)),
            'notActions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNotActions($val);
            },
            'notResources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setNotResources($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResources($val);
            },
            'statementId' => fn(ParseNode $n) => $o->setStatementId($n->getStringValue()),
        ];
    }

    /**
     * Gets the notActions property value. AWS Not Actions
     * @return array<string>|null
    */
    public function getNotActions(): ?array {
        $val = $this->getBackingStore()->get('notActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notActions'");
    }

    /**
     * Gets the notResources property value. AWS Not Resources
     * @return array<string>|null
    */
    public function getNotResources(): ?array {
        $val = $this->getBackingStore()->get('notResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notResources'");
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
     * Gets the resources property value. The AWS resources associated with the statement.
     * @return array<string>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the statementId property value. The ID of the AWS statement.
     * @return string|null
    */
    public function getStatementId(): ?string {
        $val = $this->getBackingStore()->get('statementId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statementId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('actions', $this->getActions());
        $writer->writeObjectValue('condition', $this->getCondition());
        $writer->writeEnumValue('effect', $this->getEffect());
        $writer->writeCollectionOfPrimitiveValues('notActions', $this->getNotActions());
        $writer->writeCollectionOfPrimitiveValues('notResources', $this->getNotResources());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('resources', $this->getResources());
        $writer->writeStringValue('statementId', $this->getStatementId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actions property value. The AWS actions.
     * @param array<string>|null $value Value to set for the actions property.
    */
    public function setActions(?array $value): void {
        $this->getBackingStore()->set('actions', $value);
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
     * Sets the condition property value. The AWS conditions associated with the statement.
     * @param AwsCondition|null $value Value to set for the condition property.
    */
    public function setCondition(?AwsCondition $value): void {
        $this->getBackingStore()->set('condition', $value);
    }

    /**
     * Sets the effect property value. The effect property
     * @param AwsStatementEffect|null $value Value to set for the effect property.
    */
    public function setEffect(?AwsStatementEffect $value): void {
        $this->getBackingStore()->set('effect', $value);
    }

    /**
     * Sets the notActions property value. AWS Not Actions
     * @param array<string>|null $value Value to set for the notActions property.
    */
    public function setNotActions(?array $value): void {
        $this->getBackingStore()->set('notActions', $value);
    }

    /**
     * Sets the notResources property value. AWS Not Resources
     * @param array<string>|null $value Value to set for the notResources property.
    */
    public function setNotResources(?array $value): void {
        $this->getBackingStore()->set('notResources', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resources property value. The AWS resources associated with the statement.
     * @param array<string>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the statementId property value. The ID of the AWS statement.
     * @param string|null $value Value to set for the statementId property.
    */
    public function setStatementId(?string $value): void {
        $this->getBackingStore()->set('statementId', $value);
    }

}
