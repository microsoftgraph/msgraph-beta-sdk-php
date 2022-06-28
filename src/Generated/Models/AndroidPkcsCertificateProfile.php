<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidPkcsCertificateProfile extends AndroidCertificateProfileBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $certificateTemplateName PKCS Certificate Template Name
    */
    private ?string $certificateTemplateName = null;
    
    /**
     * @var string|null $certificationAuthority PKCS Certification Authority
    */
    private ?string $certificationAuthority = null;
    
    /**
     * @var string|null $certificationAuthorityName PKCS Certification Authority Name
    */
    private ?string $certificationAuthorityName = null;
    
    /**
     * @var array<ManagedDeviceCertificateState>|null $managedDeviceCertificateStates Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
    */
    private ?array $managedDeviceCertificateStates = null;
    
    /**
     * @var string|null $subjectAlternativeNameFormatString Custom String that defines the AAD Attribute.
    */
    private ?string $subjectAlternativeNameFormatString = null;
    
    /**
     * Instantiates a new AndroidPkcsCertificateProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidPkcsCertificateProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidPkcsCertificateProfile {
        return new AndroidPkcsCertificateProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificateTemplateName property value. PKCS Certificate Template Name
     * @return string|null
    */
    public function getCertificateTemplateName(): ?string {
        return $this->certificateTemplateName;
    }

    /**
     * Gets the certificationAuthority property value. PKCS Certification Authority
     * @return string|null
    */
    public function getCertificationAuthority(): ?string {
        return $this->certificationAuthority;
    }

    /**
     * Gets the certificationAuthorityName property value. PKCS Certification Authority Name
     * @return string|null
    */
    public function getCertificationAuthorityName(): ?string {
        return $this->certificationAuthorityName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'certificateTemplateName' => function (ParseNode $n) use ($o) { $o->setCertificateTemplateName($n->getStringValue()); },
            'certificationAuthority' => function (ParseNode $n) use ($o) { $o->setCertificationAuthority($n->getStringValue()); },
            'certificationAuthorityName' => function (ParseNode $n) use ($o) { $o->setCertificationAuthorityName($n->getStringValue()); },
            'managedDeviceCertificateStates' => function (ParseNode $n) use ($o) { $o->setManagedDeviceCertificateStates($n->getCollectionOfObjectValues(array(ManagedDeviceCertificateState::class, 'createFromDiscriminatorValue'))); },
            'subjectAlternativeNameFormatString' => function (ParseNode $n) use ($o) { $o->setSubjectAlternativeNameFormatString($n->getStringValue()); },
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
     * Gets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     * @return string|null
    */
    public function getSubjectAlternativeNameFormatString(): ?string {
        return $this->subjectAlternativeNameFormatString;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('certificateTemplateName', $this->certificateTemplateName);
        $writer->writeStringValue('certificationAuthority', $this->certificationAuthority);
        $writer->writeStringValue('certificationAuthorityName', $this->certificationAuthorityName);
        $writer->writeCollectionOfObjectValues('managedDeviceCertificateStates', $this->managedDeviceCertificateStates);
        $writer->writeStringValue('subjectAlternativeNameFormatString', $this->subjectAlternativeNameFormatString);
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
     * Sets the certificateTemplateName property value. PKCS Certificate Template Name
     *  @param string|null $value Value to set for the certificateTemplateName property.
    */
    public function setCertificateTemplateName(?string $value ): void {
        $this->certificateTemplateName = $value;
    }

    /**
     * Sets the certificationAuthority property value. PKCS Certification Authority
     *  @param string|null $value Value to set for the certificationAuthority property.
    */
    public function setCertificationAuthority(?string $value ): void {
        $this->certificationAuthority = $value;
    }

    /**
     * Sets the certificationAuthorityName property value. PKCS Certification Authority Name
     *  @param string|null $value Value to set for the certificationAuthorityName property.
    */
    public function setCertificationAuthorityName(?string $value ): void {
        $this->certificationAuthorityName = $value;
    }

    /**
     * Sets the managedDeviceCertificateStates property value. Certificate state for devices. This collection can contain a maximum of 2147483647 elements.
     *  @param array<ManagedDeviceCertificateState>|null $value Value to set for the managedDeviceCertificateStates property.
    */
    public function setManagedDeviceCertificateStates(?array $value ): void {
        $this->managedDeviceCertificateStates = $value;
    }

    /**
     * Sets the subjectAlternativeNameFormatString property value. Custom String that defines the AAD Attribute.
     *  @param string|null $value Value to set for the subjectAlternativeNameFormatString property.
    */
    public function setSubjectAlternativeNameFormatString(?string $value ): void {
        $this->subjectAlternativeNameFormatString = $value;
    }

}
