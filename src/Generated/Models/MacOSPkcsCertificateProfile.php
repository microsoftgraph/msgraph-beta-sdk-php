<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSPkcsCertificateProfile extends MacOSCertificateProfileBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowAllAppsAccess AllowAllAppsAccess setting
    */
    private ?bool $allowAllAppsAccess = null;
    
    /**
     * @var CertificateStore|null $certificateStore Target store certificate. Possible values are: user, machine.
    */
    private ?CertificateStore $certificateStore = null;
    
    /**
     * @var string|null $certificateTemplateName PKCS certificate template name.
    */
    private ?string $certificateTemplateName = null;
    
    /**
     * @var string|null $certificationAuthority PKCS certification authority FQDN.
    */
    private ?string $certificationAuthority = null;
    
    /**
     * @var string|null $certificationAuthorityName PKCS certification authority Name.
    */
    private ?string $certificationAuthorityName = null;
    
    /**
     * @var array<CustomSubjectAlternativeName>|null $customSubjectAlternativeNames Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
    */
    private ?array $customSubjectAlternativeNames = null;
    
    /**
     * @var array<ManagedDeviceCertificateState>|null $managedDeviceCertificateStates Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    */
    private ?array $managedDeviceCertificateStates = null;
    
    /**
     * @var string|null $subjectAlternativeNameFormatString Format string that defines the subject alternative name.
    */
    private ?string $subjectAlternativeNameFormatString = null;
    
    /**
     * @var string|null $subjectNameFormatString Format string that defines the subject name. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
    */
    private ?string $subjectNameFormatString = null;
    
    /**
     * Instantiates a new MacOSPkcsCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSPkcsCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSPkcsCertificateProfile {
        return new MacOSPkcsCertificateProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowAllAppsAccess property value. AllowAllAppsAccess setting
     * @return bool|null
    */
    public function getAllowAllAppsAccess(): ?bool {
        return $this->allowAllAppsAccess;
    }

    /**
     * Gets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     * @return CertificateStore|null
    */
    public function getCertificateStore(): ?CertificateStore {
        return $this->certificateStore;
    }

    /**
     * Gets the certificateTemplateName property value. PKCS certificate template name.
     * @return string|null
    */
    public function getCertificateTemplateName(): ?string {
        return $this->certificateTemplateName;
    }

    /**
     * Gets the certificationAuthority property value. PKCS certification authority FQDN.
     * @return string|null
    */
    public function getCertificationAuthority(): ?string {
        return $this->certificationAuthority;
    }

    /**
     * Gets the certificationAuthorityName property value. PKCS certification authority Name.
     * @return string|null
    */
    public function getCertificationAuthorityName(): ?string {
        return $this->certificationAuthorityName;
    }

    /**
     * Gets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     * @return array<CustomSubjectAlternativeName>|null
    */
    public function getCustomSubjectAlternativeNames(): ?array {
        return $this->customSubjectAlternativeNames;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAllAppsAccess' => function (ParseNode $n) use ($o) { $o->setAllowAllAppsAccess($n->getBooleanValue()); },
            'certificateStore' => function (ParseNode $n) use ($o) { $o->setCertificateStore($n->getEnumValue(CertificateStore::class)); },
            'certificateTemplateName' => function (ParseNode $n) use ($o) { $o->setCertificateTemplateName($n->getStringValue()); },
            'certificationAuthority' => function (ParseNode $n) use ($o) { $o->setCertificationAuthority($n->getStringValue()); },
            'certificationAuthorityName' => function (ParseNode $n) use ($o) { $o->setCertificationAuthorityName($n->getStringValue()); },
            'customSubjectAlternativeNames' => function (ParseNode $n) use ($o) { $o->setCustomSubjectAlternativeNames($n->getCollectionOfObjectValues(array(CustomSubjectAlternativeName::class, 'createFromDiscriminatorValue'))); },
            'managedDeviceCertificateStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues(array(ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'))); },
            'subjectAlternativeNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectAlternativeNameFormatString($n->getStringValue()); },
            'subjectNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectNameFormatString($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     * @return array<ManagedDeviceCertificateState>|null
    */
    public function getManagedDeviceCertificateStates(): ?array {
        return $this->managedDeviceCertificateStates;
    }

    /**
     * Gets the subjectAlternativeNameFormatString property value. Format string that defines the subject alternative name.
     * @return string|null
    */
    public function getSubjectAlternativeNameFormatString(): ?string {
        return $this->subjectAlternativeNameFormatString;
    }

    /**
     * Gets the subjectNameFormatString property value. Format string that defines the subject name. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     * @return string|null
    */
    public function getSubjectNameFormatString(): ?string {
        return $this->subjectNameFormatString;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAllAppsAccess', $this->allowAllAppsAccess);
        $writer->writeEnumValue('certificateStore', $this->certificateStore);
        $writer->writeStringValue('certificateTemplateName', $this->certificateTemplateName);
        $writer->writeStringValue('certificationAuthority', $this->certificationAuthority);
        $writer->writeStringValue('certificationAuthorityName', $this->certificationAuthorityName);
        $writer->writeCollectionOfObjectValues('customSubjectAlternativeNames', $this->customSubjectAlternativeNames);
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->managedDeviceCertificateStates);
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->subjectAlternativeNameFormatString);
        $writer->writeStringValue('subjectNameFormatString', $this->subjectNameFormatString);
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
     * Sets the allowAllAppsAccess property value. AllowAllAppsAccess setting
     *  @param bool|null $value Value to set for the allowAllAppsAccess property.
    */
    public function setAllowAllAppsAccess(?bool $value ): void {
        $this->allowAllAppsAccess = $value;
    }

    /**
     * Sets the certificateStore property value. Target store certificate. Possible values are: user, machine.
     *  @param CertificateStore|null $value Value to set for the certificateStore property.
    */
    public function setCertificateStore(?CertificateStore $value ): void {
        $this->certificateStore = $value;
    }

    /**
     * Sets the certificateTemplateName property value. PKCS certificate template name.
     *  @param string|null $value Value to set for the certificateTemplateName property.
    */
    public function setCertificateTemplateName(?string $value ): void {
        $this->certificateTemplateName = $value;
    }

    /**
     * Sets the certificationAuthority property value. PKCS certification authority FQDN.
     *  @param string|null $value Value to set for the certificationAuthority property.
    */
    public function setCertificationAuthority(?string $value ): void {
        $this->certificationAuthority = $value;
    }

    /**
     * Sets the certificationAuthorityName property value. PKCS certification authority Name.
     *  @param string|null $value Value to set for the certificationAuthorityName property.
    */
    public function setCertificationAuthorityName(?string $value ): void {
        $this->certificationAuthorityName = $value;
    }

    /**
     * Sets the customSubjectAlternativeNames property value. Custom Subject Alternative Name Settings. This collection can contain a maximum of 500 elements.
     *  @param array<CustomSubjectAlternativeName>|null $value Value to set for the customSubjectAlternativeNames property.
    */
    public function setCustomSubjectAlternativeNames(?array $value ): void {
        $this->customSubjectAlternativeNames = $value;
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *  @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value ): void {
        $this->managedDeviceCertificateStates = $value;
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Format string that defines the subject alternative name.
     *  @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value ): void {
        $this->subjectAlternativeNameFormatString = $value;
    }

    /**
     * Sets the subjectNameFormatString property value. Format string that defines the subject name. Example: CN={{EmailAddress}},E={{EmailAddress}},OU=Enterprise Users,O=Contoso Corporation,L=Redmond,ST=WA,C=US
     *  @param string|null $value Value to set for the subjectNameFormatString property.
    */
    public function setSubjectNameFormatString(?string $value ): void {
        $this->subjectNameFormatString = $value;
    }

}
