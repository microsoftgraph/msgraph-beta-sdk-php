<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UsageRightsInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UsageRightsInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageRightsInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageRightsInfo {
        return new UsageRightsInfo();
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
     * Gets the allowCopy property value. Indicates whether the user has permission to copy content from the protected resource. When true, copying is allowed; when false, copying is restricted by the sensitivity label policy.
     * @return bool|null
    */
    public function getAllowCopy(): ?bool {
        $val = $this->getBackingStore()->get('allowCopy');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCopy'");
    }

    /**
     * Gets the allowEdit property value. Indicates whether the user has permission to edit or modify the protected content. When true, editing is allowed; when false, the content is read-only for this user.
     * @return bool|null
    */
    public function getAllowEdit(): ?bool {
        $val = $this->getBackingStore()->get('allowEdit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowEdit'");
    }

    /**
     * Gets the allowExport property value. Indicates whether the user has permission to export or save the protected content to external locations. When true, exporting is allowed; when false, export operations are restricted.
     * @return bool|null
    */
    public function getAllowExport(): ?bool {
        $val = $this->getBackingStore()->get('allowExport');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowExport'");
    }

    /**
     * Gets the allowPrint property value. Indicates whether the user has permission to print the protected content. When true, printing is allowed; when false, print functionality is disabled.
     * @return bool|null
    */
    public function getAllowPrint(): ?bool {
        $val = $this->getBackingStore()->get('allowPrint');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPrint'");
    }

    /**
     * Gets the allowView property value. Indicates whether the user has permission to view or access the protected content. When true, the user can view the content; when false, access is denied.
     * @return bool|null
    */
    public function getAllowView(): ?bool {
        $val = $this->getBackingStore()->get('allowView');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowView'");
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
            'allowCopy' => fn(ParseNode $n) => $o->setAllowCopy($n->getBooleanValue()),
            'allowEdit' => fn(ParseNode $n) => $o->setAllowEdit($n->getBooleanValue()),
            'allowExport' => fn(ParseNode $n) => $o->setAllowExport($n->getBooleanValue()),
            'allowPrint' => fn(ParseNode $n) => $o->setAllowPrint($n->getBooleanValue()),
            'allowView' => fn(ParseNode $n) => $o->setAllowView($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCopy', $this->getAllowCopy());
        $writer->writeBooleanValue('allowEdit', $this->getAllowEdit());
        $writer->writeBooleanValue('allowExport', $this->getAllowExport());
        $writer->writeBooleanValue('allowPrint', $this->getAllowPrint());
        $writer->writeBooleanValue('allowView', $this->getAllowView());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the allowCopy property value. Indicates whether the user has permission to copy content from the protected resource. When true, copying is allowed; when false, copying is restricted by the sensitivity label policy.
     * @param bool|null $value Value to set for the allowCopy property.
    */
    public function setAllowCopy(?bool $value): void {
        $this->getBackingStore()->set('allowCopy', $value);
    }

    /**
     * Sets the allowEdit property value. Indicates whether the user has permission to edit or modify the protected content. When true, editing is allowed; when false, the content is read-only for this user.
     * @param bool|null $value Value to set for the allowEdit property.
    */
    public function setAllowEdit(?bool $value): void {
        $this->getBackingStore()->set('allowEdit', $value);
    }

    /**
     * Sets the allowExport property value. Indicates whether the user has permission to export or save the protected content to external locations. When true, exporting is allowed; when false, export operations are restricted.
     * @param bool|null $value Value to set for the allowExport property.
    */
    public function setAllowExport(?bool $value): void {
        $this->getBackingStore()->set('allowExport', $value);
    }

    /**
     * Sets the allowPrint property value. Indicates whether the user has permission to print the protected content. When true, printing is allowed; when false, print functionality is disabled.
     * @param bool|null $value Value to set for the allowPrint property.
    */
    public function setAllowPrint(?bool $value): void {
        $this->getBackingStore()->set('allowPrint', $value);
    }

    /**
     * Sets the allowView property value. Indicates whether the user has permission to view or access the protected content. When true, the user can view the content; when false, access is denied.
     * @param bool|null $value Value to set for the allowView property.
    */
    public function setAllowView(?bool $value): void {
        $this->getBackingStore()->set('allowView', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
