<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\SendCustomNotificationToCompanyPortal;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SendCustomNotificationToCompanyPortalPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sendCustomNotificationToCompanyPortalPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendCustomNotificationToCompanyPortalPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendCustomNotificationToCompanyPortalPostRequestBody {
        return new SendCustomNotificationToCompanyPortalPostRequestBody();
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
            'groupsToNotify' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setGroupsToNotify($val);
            },
            'notificationBody' => fn(ParseNode $n) => $o->setNotificationBody($n->getStringValue()),
            'notificationTitle' => fn(ParseNode $n) => $o->setNotificationTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the groupsToNotify property value. The groupsToNotify property
     * @return array<string>|null
    */
    public function getGroupsToNotify(): ?array {
        $val = $this->getBackingStore()->get('groupsToNotify');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupsToNotify'");
    }

    /**
     * Gets the notificationBody property value. The notificationBody property
     * @return string|null
    */
    public function getNotificationBody(): ?string {
        $val = $this->getBackingStore()->get('notificationBody');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationBody'");
    }

    /**
     * Gets the notificationTitle property value. The notificationTitle property
     * @return string|null
    */
    public function getNotificationTitle(): ?string {
        $val = $this->getBackingStore()->get('notificationTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notificationTitle'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('groupsToNotify', $this->getGroupsToNotify());
        $writer->writeStringValue('notificationBody', $this->getNotificationBody());
        $writer->writeStringValue('notificationTitle', $this->getNotificationTitle());
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
     * Sets the groupsToNotify property value. The groupsToNotify property
     * @param array<string>|null $value Value to set for the groupsToNotify property.
    */
    public function setGroupsToNotify(?array $value): void {
        $this->getBackingStore()->set('groupsToNotify', $value);
    }

    /**
     * Sets the notificationBody property value. The notificationBody property
     * @param string|null $value Value to set for the notificationBody property.
    */
    public function setNotificationBody(?string $value): void {
        $this->getBackingStore()->set('notificationBody', $value);
    }

    /**
     * Sets the notificationTitle property value. The notificationTitle property
     * @param string|null $value Value to set for the notificationTitle property.
    */
    public function setNotificationTitle(?string $value): void {
        $this->getBackingStore()->set('notificationTitle', $value);
    }

}
