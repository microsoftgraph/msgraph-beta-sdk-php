<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosSingleSignOnSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AppListItem>|null $allowedAppsList List of app identifiers that are allowed to use this login. If this field is omitted, the login applies to all applications on the device. This collection can contain a maximum of 500 elements.
    */
    private ?array $allowedAppsList = null;
    
    /**
     * @var array<string>|null $allowedUrls List of HTTP URLs that must be matched in order to use this login. With iOS 9.0 or later, a wildcard characters may be used.
    */
    private ?array $allowedUrls = null;
    
    /**
     * @var string|null $displayName The display name of login settings shown on the receiving device.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $kerberosPrincipalName A Kerberos principal name. If not provided, the user is prompted for one during profile installation.
    */
    private ?string $kerberosPrincipalName = null;
    
    /**
     * @var string|null $kerberosRealm A Kerberos realm name. Case sensitive.
    */
    private ?string $kerberosRealm = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new iosSingleSignOnSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.iosSingleSignOnSettings');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedAppsList property value. List of app identifiers that are allowed to use this login. If this field is omitted, the login applies to all applications on the device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAllowedAppsList(): ?array {
        return $this->allowedAppsList;
    }

    /**
     * Gets the allowedUrls property value. List of HTTP URLs that must be matched in order to use this login. With iOS 9.0 or later, a wildcard characters may be used.
     * @return array<string>|null
    */
    public function getAllowedUrls(): ?array {
        return $this->allowedUrls;
    }

    /**
     * Gets the displayName property value. The display name of login settings shown on the receiving device.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedAppsList' => function (ParseNode $n) use ($o) { $o->setAllowedAppsList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'allowedUrls' => function (ParseNode $n) use ($o) { $o->setAllowedUrls($n->getCollectionOfPrimitiveValues()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'kerberosPrincipalName' => function (ParseNode $n) use ($o) { $o->setKerberosPrincipalName($n->getStringValue()); },
            'kerberosRealm' => function (ParseNode $n) use ($o) { $o->setKerberosRealm($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the kerberosPrincipalName property value. A Kerberos principal name. If not provided, the user is prompted for one during profile installation.
     * @return string|null
    */
    public function getKerberosPrincipalName(): ?string {
        return $this->kerberosPrincipalName;
    }

    /**
     * Gets the kerberosRealm property value. A Kerberos realm name. Case sensitive.
     * @return string|null
    */
    public function getKerberosRealm(): ?string {
        return $this->kerberosRealm;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('allowedAppsList', $this->allowedAppsList);
        $writer->writeCollectionOfPrimitiveValues('allowedUrls', $this->allowedUrls);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('kerberosPrincipalName', $this->kerberosPrincipalName);
        $writer->writeStringValue('kerberosRealm', $this->kerberosRealm);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowedAppsList property value. List of app identifiers that are allowed to use this login. If this field is omitted, the login applies to all applications on the device. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the allowedAppsList property.
    */
    public function setAllowedAppsList(?array $value ): void {
        $this->allowedAppsList = $value;
    }

    /**
     * Sets the allowedUrls property value. List of HTTP URLs that must be matched in order to use this login. With iOS 9.0 or later, a wildcard characters may be used.
     *  @param array<string>|null $value Value to set for the allowedUrls property.
    */
    public function setAllowedUrls(?array $value ): void {
        $this->allowedUrls = $value;
    }

    /**
     * Sets the displayName property value. The display name of login settings shown on the receiving device.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the kerberosPrincipalName property value. A Kerberos principal name. If not provided, the user is prompted for one during profile installation.
     *  @param string|null $value Value to set for the kerberosPrincipalName property.
    */
    public function setKerberosPrincipalName(?string $value ): void {
        $this->kerberosPrincipalName = $value;
    }

    /**
     * Sets the kerberosRealm property value. A Kerberos realm name. Case sensitive.
     *  @param string|null $value Value to set for the kerberosRealm property.
    */
    public function setKerberosRealm(?string $value ): void {
        $this->kerberosRealm = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
