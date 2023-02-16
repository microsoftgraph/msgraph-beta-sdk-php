<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * iOS Kerberos authentication settings for single sign-on
*/
class IosSingleSignOnSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new iosSingleSignOnSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosSingleSignOnSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosSingleSignOnSettings {
        return new IosSingleSignOnSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the allowedAppsList property value. List of app identifiers that are allowed to use this login. If this field is omitted, the login applies to all applications on the device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAllowedAppsList(): ?array {
        return $this->getBackingStore()->get('allowedAppsList');
    }

    /**
     * Gets the allowedUrls property value. List of HTTP URLs that must be matched in order to use this login. With iOS 9.0 or later, a wildcard characters may be used.
     * @return array<string>|null
    */
    public function getAllowedUrls(): ?array {
        return $this->getBackingStore()->get('allowedUrls');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the displayName property value. The display name of login settings shown on the receiving device.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedAppsList' => fn(ParseNode $n) => $o->setAllowedAppsList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'allowedUrls' => fn(ParseNode $n) => $o->setAllowedUrls($n->getCollectionOfPrimitiveValues()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'kerberosPrincipalName' => fn(ParseNode $n) => $o->setKerberosPrincipalName($n->getStringValue()),
            'kerberosRealm' => fn(ParseNode $n) => $o->setKerberosRealm($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the kerberosPrincipalName property value. A Kerberos principal name. If not provided, the user is prompted for one during profile installation.
     * @return string|null
    */
    public function getKerberosPrincipalName(): ?string {
        return $this->getBackingStore()->get('kerberosPrincipalName');
    }

    /**
     * Gets the kerberosRealm property value. A Kerberos realm name. Case sensitive.
     * @return string|null
    */
    public function getKerberosRealm(): ?string {
        return $this->getBackingStore()->get('kerberosRealm');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('allowedAppsList', $this->getAllowedAppsList());
        $writer->writeCollectionOfPrimitiveValues('allowedUrls', $this->getAllowedUrls());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('kerberosPrincipalName', $this->getKerberosPrincipalName());
        $writer->writeStringValue('kerberosRealm', $this->getKerberosRealm());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowedAppsList property value. List of app identifiers that are allowed to use this login. If this field is omitted, the login applies to all applications on the device. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the allowedAppsList property.
    */
    public function setAllowedAppsList(?array $value): void {
        $this->getBackingStore()->set('allowedAppsList', $value);
    }

    /**
     * Sets the allowedUrls property value. List of HTTP URLs that must be matched in order to use this login. With iOS 9.0 or later, a wildcard characters may be used.
     * @param array<string>|null $value Value to set for the allowedUrls property.
    */
    public function setAllowedUrls(?array $value): void {
        $this->getBackingStore()->set('allowedUrls', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the displayName property value. The display name of login settings shown on the receiving device.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the kerberosPrincipalName property value. A Kerberos principal name. If not provided, the user is prompted for one during profile installation.
     * @param string|null $value Value to set for the kerberosPrincipalName property.
    */
    public function setKerberosPrincipalName(?string $value): void {
        $this->getBackingStore()->set('kerberosPrincipalName', $value);
    }

    /**
     * Sets the kerberosRealm property value. A Kerberos realm name. Case sensitive.
     * @param string|null $value Value to set for the kerberosRealm property.
    */
    public function setKerberosRealm(?string $value): void {
        $this->getBackingStore()->set('kerberosRealm', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
