<?php

namespace Microsoft\\Graph\\Beta\\Generated\Admin\Windows\Updates\Deployments\Item\Audience\MicrosoftGraphWindowsUpdatesUpdateAudienceById;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UpdateAudienceByIdPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateAudienceByIdPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAudienceByIdPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAudienceByIdPostRequestBody {
        return new UpdateAudienceByIdPostRequestBody();
    }

    /**
     * Gets the addExclusions property value. The addExclusions property
     * @return array<string>|null
    */
    public function getAddExclusions(): ?array {
        $val = $this->getBackingStore()->get('addExclusions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addExclusions'");
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
     * Gets the addMembers property value. The addMembers property
     * @return array<string>|null
    */
    public function getAddMembers(): ?array {
        $val = $this->getBackingStore()->get('addMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addMembers'");
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
            'addExclusions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAddExclusions($val);
            },
            'addMembers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAddMembers($val);
            },
            'memberEntityType' => fn(ParseNode $n) => $o->setMemberEntityType($n->getStringValue()),
            'removeExclusions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRemoveExclusions($val);
            },
            'removeMembers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRemoveMembers($val);
            },
        ];
    }

    /**
     * Gets the memberEntityType property value. The memberEntityType property
     * @return string|null
    */
    public function getMemberEntityType(): ?string {
        $val = $this->getBackingStore()->get('memberEntityType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberEntityType'");
    }

    /**
     * Gets the removeExclusions property value. The removeExclusions property
     * @return array<string>|null
    */
    public function getRemoveExclusions(): ?array {
        $val = $this->getBackingStore()->get('removeExclusions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removeExclusions'");
    }

    /**
     * Gets the removeMembers property value. The removeMembers property
     * @return array<string>|null
    */
    public function getRemoveMembers(): ?array {
        $val = $this->getBackingStore()->get('removeMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removeMembers'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('addExclusions', $this->getAddExclusions());
        $writer->writeCollectionOfPrimitiveValues('addMembers', $this->getAddMembers());
        $writer->writeStringValue('memberEntityType', $this->getMemberEntityType());
        $writer->writeCollectionOfPrimitiveValues('removeExclusions', $this->getRemoveExclusions());
        $writer->writeCollectionOfPrimitiveValues('removeMembers', $this->getRemoveMembers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the addExclusions property value. The addExclusions property
     * @param array<string>|null $value Value to set for the addExclusions property.
    */
    public function setAddExclusions(?array $value): void {
        $this->getBackingStore()->set('addExclusions', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the addMembers property value. The addMembers property
     * @param array<string>|null $value Value to set for the addMembers property.
    */
    public function setAddMembers(?array $value): void {
        $this->getBackingStore()->set('addMembers', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the memberEntityType property value. The memberEntityType property
     * @param string|null $value Value to set for the memberEntityType property.
    */
    public function setMemberEntityType(?string $value): void {
        $this->getBackingStore()->set('memberEntityType', $value);
    }

    /**
     * Sets the removeExclusions property value. The removeExclusions property
     * @param array<string>|null $value Value to set for the removeExclusions property.
    */
    public function setRemoveExclusions(?array $value): void {
        $this->getBackingStore()->set('removeExclusions', $value);
    }

    /**
     * Sets the removeMembers property value. The removeMembers property
     * @param array<string>|null $value Value to set for the removeMembers property.
    */
    public function setRemoveMembers(?array $value): void {
        $this->getBackingStore()->set('removeMembers', $value);
    }

}
