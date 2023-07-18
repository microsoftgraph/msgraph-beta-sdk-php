<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Unsupported Group Policy Extension.
*/
class UnsupportedGroupPolicyExtension extends Entity implements Parsable 
{
    /**
     * Instantiates a new unsupportedGroupPolicyExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnsupportedGroupPolicyExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnsupportedGroupPolicyExtension {
        return new UnsupportedGroupPolicyExtension();
    }

    /**
     * Gets the extensionType property value. ExtensionType of the unsupported extension.
     * @return string|null
    */
    public function getExtensionType(): ?string {
        $val = $this->getBackingStore()->get('extensionType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'extensionType' => fn(ParseNode $n) => $o->setExtensionType($n->getStringValue()),
            'namespaceUrl' => fn(ParseNode $n) => $o->setNamespaceUrl($n->getStringValue()),
            'nodeName' => fn(ParseNode $n) => $o->setNodeName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'settingScope' => fn(ParseNode $n) => $o->setSettingScope($n->getEnumValue(GroupPolicySettingScope::class)),
        ]);
    }

    /**
     * Gets the namespaceUrl property value. Namespace Url of the unsupported extension.
     * @return string|null
    */
    public function getNamespaceUrl(): ?string {
        $val = $this->getBackingStore()->get('namespaceUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'namespaceUrl'");
    }

    /**
     * Gets the nodeName property value. Node name of the unsupported extension.
     * @return string|null
    */
    public function getNodeName(): ?string {
        $val = $this->getBackingStore()->get('nodeName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nodeName'");
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
     * Gets the settingScope property value. Scope of the group policy setting.
     * @return GroupPolicySettingScope|null
    */
    public function getSettingScope(): ?GroupPolicySettingScope {
        $val = $this->getBackingStore()->get('settingScope');
        if (is_null($val) || $val instanceof GroupPolicySettingScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingScope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('extensionType', $this->getExtensionType());
        $writer->writeStringValue('namespaceUrl', $this->getNamespaceUrl());
        $writer->writeStringValue('nodeName', $this->getNodeName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('settingScope', $this->getSettingScope());
    }

    /**
     * Sets the extensionType property value. ExtensionType of the unsupported extension.
     * @param string|null $value Value to set for the extensionType property.
    */
    public function setExtensionType(?string $value): void {
        $this->getBackingStore()->set('extensionType', $value);
    }

    /**
     * Sets the namespaceUrl property value. Namespace Url of the unsupported extension.
     * @param string|null $value Value to set for the namespaceUrl property.
    */
    public function setNamespaceUrl(?string $value): void {
        $this->getBackingStore()->set('namespaceUrl', $value);
    }

    /**
     * Sets the nodeName property value. Node name of the unsupported extension.
     * @param string|null $value Value to set for the nodeName property.
    */
    public function setNodeName(?string $value): void {
        $this->getBackingStore()->set('nodeName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the settingScope property value. Scope of the group policy setting.
     * @param GroupPolicySettingScope|null $value Value to set for the settingScope property.
    */
    public function setSettingScope(?GroupPolicySettingScope $value): void {
        $this->getBackingStore()->set('settingScope', $value);
    }

}
