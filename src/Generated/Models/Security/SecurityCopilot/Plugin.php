<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security\SecurityCopilot;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Plugin implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Plugin and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Plugin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Plugin {
        return new Plugin();
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
     * Gets the authorization property value. Authorization for the plugin.
     * @return PluginAuth|null
    */
    public function getAuthorization(): ?PluginAuth {
        $val = $this->getBackingStore()->get('authorization');
        if (is_null($val) || $val instanceof PluginAuth) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorization'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the catalogScope property value. The catalogScope property
     * @return PluginCatalogScope|null
    */
    public function getCatalogScope(): ?PluginCatalogScope {
        $val = $this->getBackingStore()->get('catalogScope');
        if (is_null($val) || $val instanceof PluginCatalogScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogScope'");
    }

    /**
     * Gets the category property value. The category property
     * @return PluginCategory|null
    */
    public function getCategory(): ?PluginCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof PluginCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the description property value. Brief description of the plugin.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Display name of the plugin.   Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorization' => fn(ParseNode $n) => $o->setAuthorization($n->getObjectValue([PluginAuth::class, 'createFromDiscriminatorValue'])),
            'catalogScope' => fn(ParseNode $n) => $o->setCatalogScope($n->getEnumValue(PluginCatalogScope::class)),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(PluginCategory::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'previewState' => fn(ParseNode $n) => $o->setPreviewState($n->getEnumValue(PluginPreviewStates::class)),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getCollectionOfObjectValues([PluginSetting::class, 'createFromDiscriminatorValue'])),
            'supportedAuthTypes' => fn(ParseNode $n) => $o->setSupportedAuthTypes($n->getEnumValue(PluginAuthTypes::class)),
        ];
    }

    /**
     * Gets the isEnabled property value. Displays whether the plugin is enabled for use within the catalogScope.   Supports $filter (eq).
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the name property value. Represents the name of the plugin. Primary key.   Supports $filter (eq, contains).
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
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
     * Gets the previewState property value. The previewState property
     * @return PluginPreviewStates|null
    */
    public function getPreviewState(): ?PluginPreviewStates {
        $val = $this->getBackingStore()->get('previewState');
        if (is_null($val) || $val instanceof PluginPreviewStates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previewState'");
    }

    /**
     * Gets the settings property value. Settings for the plugin.
     * @return array<PluginSetting>|null
    */
    public function getSettings(): ?array {
        $val = $this->getBackingStore()->get('settings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PluginSetting::class);
            /** @var array<PluginSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the supportedAuthTypes property value. The supportedAuthTypes property
     * @return PluginAuthTypes|null
    */
    public function getSupportedAuthTypes(): ?PluginAuthTypes {
        $val = $this->getBackingStore()->get('supportedAuthTypes');
        if (is_null($val) || $val instanceof PluginAuthTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'supportedAuthTypes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authorization', $this->getAuthorization());
        $writer->writeEnumValue('catalogScope', $this->getCatalogScope());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('previewState', $this->getPreviewState());
        $writer->writeCollectionOfObjectValues('settings', $this->getSettings());
        $writer->writeEnumValue('supportedAuthTypes', $this->getSupportedAuthTypes());
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
     * Sets the authorization property value. Authorization for the plugin.
     * @param PluginAuth|null $value Value to set for the authorization property.
    */
    public function setAuthorization(?PluginAuth $value): void {
        $this->getBackingStore()->set('authorization', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the catalogScope property value. The catalogScope property
     * @param PluginCatalogScope|null $value Value to set for the catalogScope property.
    */
    public function setCatalogScope(?PluginCatalogScope $value): void {
        $this->getBackingStore()->set('catalogScope', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param PluginCategory|null $value Value to set for the category property.
    */
    public function setCategory(?PluginCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the description property value. Brief description of the plugin.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name of the plugin.   Supports $filter (eq).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isEnabled property value. Displays whether the plugin is enabled for use within the catalogScope.   Supports $filter (eq).
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the name property value. Represents the name of the plugin. Primary key.   Supports $filter (eq, contains).
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the previewState property value. The previewState property
     * @param PluginPreviewStates|null $value Value to set for the previewState property.
    */
    public function setPreviewState(?PluginPreviewStates $value): void {
        $this->getBackingStore()->set('previewState', $value);
    }

    /**
     * Sets the settings property value. Settings for the plugin.
     * @param array<PluginSetting>|null $value Value to set for the settings property.
    */
    public function setSettings(?array $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the supportedAuthTypes property value. The supportedAuthTypes property
     * @param PluginAuthTypes|null $value Value to set for the supportedAuthTypes property.
    */
    public function setSupportedAuthTypes(?PluginAuthTypes $value): void {
        $this->getBackingStore()->set('supportedAuthTypes', $value);
    }

}
